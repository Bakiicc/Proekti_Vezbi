//jshint esversion:6

const express = require("express");
const bodyParser = require("body-parser");
const ejs = require("ejs");
const mongoose = require('mongoose');

const app = express();

app.set('view engine', 'ejs');

app.use(bodyParser.urlencoded({
  extended: true
}));
app.use(express.static("public"));

//TODO
mongoose.connect("mongodb://127.0.0.1:27017/wikiDB");

const articleSchema = {
  title: String,
  content: String
}

const Article = mongoose.model("Article", articleSchema);

//////////////////////// Request targeting all articles //////////////////////

app.route("/articles")
.get(function(req, res) {
Article.find(function(err, foundArticles) {
  if (!err) {
    res.send(foundArticles);
  } else {
    res.send(err);
  }
});
})
.post(function(req, res) {
  const newArticle = new Article({
  title: req.body.title,
  content: req.body.content
});
newArticle.save(function(err) {
  if (!err) {
    res.send("Successfully added new article!");
  } else {
    res.send(err);
  }
  });
})
.delete(function(req, res) {
  Article.deleteMany(function(err) {
  if (!err) {
    res.send("Successfully deleted all articles!");
  } else {
    res.send(err);
  }
  });
});

//////////////////////// Request targeting all articles //////////////////////

app.route("/articles/:articleTitle")
.get(function(req, res) {
  Article.findOne({title: req.params.articleTitle}, function(err, foundArticle) {
    if (foundArticle) {
      res.send(foundArticle);
    } else {
      res.send("No article matching that title was found!");
    }
  });
})
.put(function(req, res) {
  Article.update(
    {title: req.params.articleTitle},
    {title: req.body.title, content: req.body.content},
    function(err) {
      if(!err) {
        res.send("Succesfully updated the content of the selected article!");
      } else {
        res.send(err);
      }
    }
  );
})
.patch(function(req, res) {
  Article.update(
    {title: req.params.articleTitle},
    {$set: req.body},
    function(err) {
      if (!err) {
        res.send("Succesfully updated article!");
      } else {
        res.send(err);
      }
    }
  );
})
.delete(function(req, res) {
  Article.deleteOne(
    {title: req.params.articleTitle},
    function(err) {
      if(!err) {
        res.send("Succesfully deleted the corresponding article!");
      } else {
        res.send(err);
      }
    }
  );
});

app.listen(3000, function() {
  console.log("Server started on port 3000");
});
