let products = {
  data: [
    {
      productName: "Theobroma",
      category: "Cakeshop",
      price: "430",
      image: "images/theobroma.jpg",
    },
    {
      productName: "Cake n Me",
      category: "Cakeshop",
      price: "490",
      image: "images/cakenme.jpg",
    },
    {
      productName: "Monginis",
      category: "Cakeshop",
      price: "350",
      image: "images/monginis.jpg",
    },
    {
      productName: "Enchanted",
      category: "Decorations",
      price: "290",
      image: "images/decorations1.jpg",
    },
    {
      productName: "Bloom",
      category: "Decorations",
      price: "129",
      image: "images/flower1.jpg",
    },
    {
      productName: "Neon Lights",
      category: "Decorations",
      price: "890",
      image: "images/decorations3.jpg",
    },
    {
      productName: "N'joy",
      category: "Party-Essentials",
      price: "1300",
      image: "images/party1.jpg",
    },
    {
      productName: "Imagica",
      category: "Party-Essentials",
      price: "1089",
      image: "images/party2.jpg",
    },
    {
      productName: "Funtime",
      category: "Party-Essentials",
      price: "189",
      image: "images/slide4.jpg",
    },
    {
      productName: "BBQ NATION",
      category: "Caterers",
      price: "1089",
      image: "images/food2.jpg",
    },
    {
      productName: "Bhagat Tarachand",
      category: "Caterers",
      price: "2889",
      image: "images/food4.jpg",
    },
    {
      productName: "Navratna",
      category: "Caterers",
      price: "4900",
      image: "images/food3.jpg",
    },
  ],
};

for (let i of products.data) {
  // Create Card
  let card = document.createElement("div");
  card.classList.add("card", i.category, "hide");

  // Image container
  let imgContainer = document.createElement("div");
  imgContainer.classList.add("image-container");
  let image = document.createElement("img");
  image.setAttribute("src", i.image);
  imgContainer.appendChild(image);
  card.appendChild(imgContainer);

  // Container for name, price, and button
  let container = document.createElement("div");
  container.classList.add("container");

  // Product name
  let name = document.createElement("h5");
  name.classList.add("product-name");
  name.innerText = i.productName.toUpperCase();
  container.appendChild(name);

  // Price
  let price = document.createElement("h6");
  price.innerText = "$" + i.price;
  container.appendChild(price);

  // Button
  let button = document.createElement("button");
  button.innerHTML = "Book Now!!";
  button.classList.add("addbutton");
  // Apply CSS styles to button
  button.style.backgroundColor = "#007bff";
  button.style.color = "#ffffff";
  button.style.border = "none";
  button.style.margin = "10px";
  button.style.padding = "10px 20px";
  button.style.cursor = "pointer";
  button.style.borderRadius = "15px";
  button.style.transition = "background-color 0.3s ease";
  container.appendChild(button);

  card.appendChild(container);
  document.getElementById("products").appendChild(card);
  const productName = i.productName.toUpperCase();
  // Add event listener to each button
  button.addEventListener("click", () => {
    alert(`The event ${productName} is booked successfully!!`);
  });
}

//parameter passed from button (Parameter same as category)
function filterProduct(value) {
  //Button class code
  let buttons = document.querySelectorAll(".button-value");
  buttons.forEach((button) => {
    //check if value equals innerText
    if (value.toUpperCase() == button.innerText.toUpperCase()) {
      button.classList.add("active");
    } else {
      button.classList.remove("active");
    }
  });

  document.querySelector(".addbutton").addEventListener("click", addEvent);

  function addEvent() {
    alert("The event has been added");
  }

  //select all cards
  let elements = document.querySelectorAll(".card");
  //loop through all cards
  elements.forEach((element) => {
    //display all cards on 'all' button click
    if (value == "all") {
      element.classList.remove("hide");
    } else {
      //Check if element contains category class
      if (element.classList.contains(value)) {
        //display element based on category
        element.classList.remove("hide");
      } else {
        //hide other elements
        element.classList.add("hide");
      }
    }
  });
}

//Search button click
document.getElementById("search").addEventListener("click", () => {
  //initializations
  let searchInput = document.getElementById("search-input").value;
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");

  //loop through all elements
  elements.forEach((element, index) => {
    //check if text includes the search value
    if (element.innerText.includes(searchInput.toUpperCase())) {
      //display matching card
      cards[index].classList.remove("hide");
    } else {
      //hide others
      cards[index].classList.add("hide");
    }
  });
});

//Initially display all products
window.onload = () => {
  filterProduct("all");
};
