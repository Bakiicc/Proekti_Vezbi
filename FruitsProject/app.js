const mongoose = require("mongoose");

mongoose.set('strictQuery',false);

mongoose.connect("mongodb://127.0.0.1:27017/fruitsDB").then(()=>console.log("DB Connected"))
.catch((err)=>console.log(err));

const fruitSchema = new mongoose.Schema ({
  name: {
    type: String,
    required: [true, "No name specified!"]
  },
  rating: {
    type: Number,
    min: 1,
    max: 10
  },
  review: String
});

const Fruit = mongoose.model("Fruit", fruitSchema);

const fruit = new Fruit ({
  name: "Apple",
  rating: 7,
  review: "Pretty solid as a fruit!"
});

fruit.save();

const persconSchema = new mongoose.Schema ({
  name: String,
  age: Number
});

const Person = new mongoose.model("Person", persconSchema);

const person = new Person ({
  name: "John",
  age: 37
});

//person.save();

// const kiwi = new Fruit ({
//   name: "Kiwi",
//   score: 7,
//   review: "Good kiwi"
// });
//
// const orange = new Fruit ({
//   name: "Orange",
//   score: 8,
//   review: "Awesome orange"
// });
//
// const banana = new Fruit ({
//   name: "Banana",
//   score: 6,
//   review: "Nice banana"
// });
//
//
// // Fruit.insertMany([kiwi, orange, banana], function(err) {
// //   if (err) {
// //     console.log(err);
// //   } else {
// //     console.log("Successfully saved all the fruits to the fruitsDB!");
// //   }
// // })

Fruit.find(function(err, fruits){
  if (err) {
    console.log(err);
  } else {

    mongoose.connection.close();

    fruits.forEach(function(fruit) {
      console.log(fruit.name);
    });
  }
});

w
