//jshint esversion:6

const express = require("express");

const app = express();

app.get("/", function(request, response){
  response.send("<h1>Hello, world!</h1>");
});

app.get("/contact", function(req, res) {
  res.send("Contact me at: bakiic@mail.com");
});

app.get("/about", function(req, res) {
  res.send("My name is Bakiicc");
});

app.get("/hobbies", function(req, res) {
  res.send("My hobby is gaming");
});

app.listen(3000, function() {
  console.log("Server started on port 3000");
});
