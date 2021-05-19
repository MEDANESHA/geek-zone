/**document
  .querySelector(".products__galory")
  .addEventListener("mouseover", function () {
    document.querySelector(".products__galory").classList.add("tran");
  });
*/
let x = document.querySelector(".cards").childElementCount;
let child = document.querySelector(".cards").children;
let j = 0;
for (let i = 3; i < x; i++) {
  child[i].classList.add("hidden");
}
//document.querySelector(".cards > *").classList.add("hidden");
document.querySelector(".cards__icon-2").addEventListener("click", function () {
  if (3 + j < x) {
    child[j].classList.add("hidden");
    child[3 + j].classList.remove("hidden");
    j++;
  }
});

document.querySelector(".cards__icon-1").addEventListener("click", function () {
  if (j > 0) {
    child[2 + j].classList.add("hidden");
    child[j - 1].classList.remove("hidden");
    j--;
  }
});
const popup = document.querySelector(".popup");
const popup2 = document.querySelector(".popup2");
const overlay = document.querySelector(".overlay");
const btnClose = document.querySelector(".popup__close");
const btnClose2 = document.querySelector(".close2");
const signinopen = document.querySelector(".sign-in");
const signupopen = document.querySelector(".sign-up");

const OpenPopup = function () {
  popup.classList.remove("hidden");
  overlay.classList.remove("hidden");
  // popup.classList.add("pop");
};
const OpenPopup2 = function () {
  popup2.classList.remove("hidden");
  overlay.classList.remove("hidden");
  // popup.classList.add("pop");
};
const ClosePopup = function () {
  popup.classList.add("hidden");
  overlay.classList.add("hidden");
};

const ClosePopup2 = function () {
  popup2.classList.add("hidden");
  overlay.classList.add("hidden");
};
const Close3 = function () {
  document.querySelector(".addtocart").classList.remove("opencart");
  document.querySelector(".none").classList.add("hidden");
  document.querySelector(".none").style.transform = "scale(1.3)";
};
document.querySelector(".close3").addEventListener("click", Close3);
btnClose2.addEventListener("click", ClosePopup2);
btnClose.addEventListener("click", ClosePopup);
signinopen.addEventListener("click", OpenPopup);
signupopen.addEventListener("click", OpenPopup2);
document.addEventListener("keydown", function (e) {
  // console.log(e.key);

  if (
    e.key === "Escape" &&
    (!popup.classList.contains("hidden") ||
      !popup2.classList.contains("hidden") ||
      !document.querySelector(".close3").classList.contains("hidden"))
  ) {
    ClosePopup();
  }
});

//add to cart

let count = document.querySelectorAll(".card__button");
///let child = document.querySelector(".cards").children;
//let j = 0;
document.cookie = "imagesrc=" + 1;
let products = [];

for (let i = 0; i < x; i++) {
  let srci = count[i].parentElement.getElementsByTagName("img")[0].src;
  let title = count[i].parentElement.querySelector(".card__text").textContent;
  let prix =
    count[i].parentElement.querySelector(".card__price span").textContent;
  products[i] = {
    name: title,
    src: srci,
    price: parseFloat(prix),
    inCart: 0,
  };
  count[i].addEventListener("click", function () {
    /* let imgsrc = this.parentElement.getElementsByTagName("img")[0].src;
    let text = this.parentElement.querySelector(".card__text").textContent;
    let price = this.parentElement.querySelector(".card__price span")
      .textContent;
*/
    //window.location.href = "http://localhost:82/geekzone/#cards";

    // window.location.href = "index.php?uid=" + imgsrc;
    setTimeout(function () {
      document.querySelector(".cart__button").classList.add("shake");
      document.querySelector(":root").style.setProperty("--disp", "block");

      setTimeout(function () {
        document.querySelector(".cart__button").classList.remove("shake");
      }, 500);
    }, 300);
    setItems(products[i]);
    totalCost(products[i]);
    display(products[i], i);
    // closeprod();
  });
}
//document.querySelector(".cards > *").classList.add("hidden");
/*document.querySelector(".cards__icon-2").addEventListener("click", function () {
  if (3 + j < x) {
    child[j].classList.add("hidden");
    child[3 + j].classList.remove("hidden");
    j++;
  }
  console.log("j1: " + j);
});

document.querySelector(".card__button").addEventListener("click", function () {
  /*var button = $(this);
    var cart = $("#cart");
    var cartTotal = cart.attr("data-totalitems");
    var newCartTotal = parseInt(cartTotal) + 1;*
  document.querySelector(".card__button").classList.add("sendtocart");

  setTimeout(function () {
    document.querySelector(".card__button").classList.remove("sendtocart");
    document.querySelector(".cart__button").classList.add("shake");
    setTimeout(function () {
      document.querySelector(".cart__button").classList.remove("shake");
    }, 500);
  }, 1000);
});
var rect = document.querySelector(".cart__button");

document.querySelector("body").onscroll = function () {
  //var rs = getComputedStyle(r);
  var r = document.querySelector(":root");
  const eleRect = document
    .querySelector(".cart__button")
    .getBoundingClientRect();
  const targetRect = document.querySelector(".cards").getBoundingClientRect();
  const top = eleRect.top - targetRect.top;
  r.style.setProperty("--position", top + "px");
};
*/
document.querySelector(".cart__button").addEventListener("click", function () {
  document.querySelector(".addtocart").classList.add("opencart");
  document.querySelector(":root").style.setProperty("--disp", "none");
  document.querySelector(".none").classList.remove("hidden");
  document.querySelector(".none").style.transform = "scale(10)";
});
/*c;onst addbutton = document.querySelectorAll(".card__button");

addbutton.addEventListener("click", function (elem) {
  let imgsrc = this.parentElement.getElementsByTagName("img")[0].src;
});
*/

displayCart();
function setItems(product) {
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);

  if (cartItems != null) {
    if (!cartItems[product.name]) {
      cartItems = {
        ...cartItems,
        [product.name]: product,
      };
      cartItems[product.name].inCart = 1;
    } else {
      cartItems[product.name].inCart += 1;
    }
    //console.log(":", cartItems[product.name].inCart);

    //console.log(":::", cartItems[product.name].inCart);
  } else {
    product.inCart = 1;
    cartItems = {
      [product.name]: product,
    };
  }

  localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
  let cartCost = localStorage.getItem("totalCost");

  if (cartCost != null) {
    cartCost = parseFloat(cartCost);
    localStorage.setItem("totalCost", cartCost + parseFloat(product.price));
  } else {
    localStorage.setItem("totalCost", parseFloat(product.price));
  }
}

function displayCart(product) {
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);

  if (cartItems) {
    Object.values(cartItems).map((item) => {
      if (item.inCart != 0) {
        var div = document.createElement("div");
        //div.setAttribute("class", "post block bc2");
        //  let n = addcart.childElementCount;

        div.innerHTML = `
    <div class="cart__product">
    <button class="cart__product-close">&times;</button>
    <div class="line1">
        <figure class="cart__product-fig">
            <img src="${item.src}" alt="product picture" class="cart__product-image" />
            <figcaption class="cart__product-text">${item.name}</figcaption>
        </figure>
        <h1 class="cart__product-price"><span style="font-size: 2rem;">${item.price}</span> dt </h1>
    </div>
    <div class="line2">
        <div class="qt">
            <span>Qt :</span> <input type="number" min="1" value="${item.inCart}" class="cart__product-quantity">
        </div>
        <button class="cart__product-button"> <svg class="cart__product-button-icon">
                <use xlink:href="img/sprite.svg#icon-svgcredit-card"></use>
            </svg>
            <span class="cart__product-button-text">by now</span></button>
    </div>
  
  </div>
    `;
        document.querySelector(".addtocart").appendChild(div);
      } else if (item.inCart == 0) {
        delete cartItems[item.name];
        localStorage.setItem("productsInCart", JSON.stringify(cartItems));
        console.log("delete");
      }
    });
  }
}

/*function updatecart() {
  var addcart = document.querySelector(".addtocart");
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);
  if (cartItems) {
    let j = 0;
    for (i in cartItems) {
      if (addcart.querySelectorAll(".cart__product-text")[j] == i.name) {
        document.querySelector(".cart__product-quantity").value += 1;
      } else {
        var div = document.createElement("div");
        //div.setAttribute("class", "post block bc2");
        //  let n = addcart.childElementCount;

        div.innerHTML = `
  <div class="cart__product">
  <div class="line1">
      <figure class="cart__product-fig">
          <img src="${i.src}" alt="product picture" class="cart__product-image" />
          <figcaption class="cart__product-text">${i.name}</figcaption>
      </figure>
      <h1 class="cart__product-price"><span style="font-size: 2rem;">${i.price}</span> dt </h1>
  </div>
  <div class="line2">
      <div class="qt">
          <span>Qt :</span> <input type="number" min="1" value="${i.inCart}" class="cart__product-quantity">
      </div>
      <button class="cart__product-button"> <svg class="cart__product-button-icon">
              <use xlink:href="img/sprite.svg#icon-svgcredit-card"></use>
          </svg>
          <span class="cart__product-button-text">by now</span></button>
  </div>

</div>
  `;
        document.querySelector(".addtocart").appendChild(div);
      }
      j++;
    }
  }
}
*/
function display(product) {
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);
  let x = document.querySelector(".addtocart ").childElementCount;
  let child = document.querySelector(".addtocart").children;
  let check = false;
  for (let i = 2; i < x; i++) {
    let a = child[i].querySelector(".cart__product-text").textContent;
    if (product.name == a) {
      // console.log("product exist");
      check = true;
      child[i].querySelector(".cart__product-quantity").value =
        cartItems[product.name].inCart;
      child[i].classList.remove("hidden");

      break;
    }
  }
  if (check == false) {
    var div = document.createElement("div");
    //div.setAttribute("class", "post block bc2");
    //  let n = addcart.childElementCount;

    div.innerHTML = `
  <div class="cart__product">
  <button class="cart__product-close">&times;</button>
  <div class="line1">
      <figure class="cart__product-fig">
          <img src="${
            cartItems[product.name].src
          }" alt="product picture" class="cart__product-image" />
          <figcaption class="cart__product-text">${
            cartItems[product.name].name
          }</figcaption>
      </figure>
      <h1 class="cart__product-price"><span style="font-size: 2rem;">${
        cartItems[product.name].price
      }</span> dt </h1>
  </div>
  <div class="line2">
      <div class="qt">
          <span>Qt :</span> <input type="number" min="1" value="${
            cartItems[product.name].inCart
          }" class="cart__product-quantity">
      </div>
      <button class="cart__product-button"> <svg class="cart__product-button-icon">
              <use xlink:href="img/sprite.svg#icon-svgcredit-card"></use>
          </svg>
          <span class="cart__product-button-text">by now</span></button>
  </div>

</div>
  `;
    document.querySelector(".addtocart").appendChild(div);
    document
      .querySelector(".addtocart")
      .lastChild.querySelector(".cart__product-close")
      .addEventListener("click", function () {
        this.parentElement.parentElement.classList.add("hidden");
        this.parentElement.querySelector(".cart__product-quantity").value = 0;

        let name = this.parentElement.querySelector(
          ".cart__product-text"
        ).textContent;
        let cartItems = localStorage.getItem("productsInCart");
        cartItems = JSON.parse(cartItems);

        let tot = localStorage.getItem("totalCost");

        // tot -= cartItems[name].price * cartItems[name].inCart;
        //localStorage.setItem("totalCost", parseFloat(tot).toFixed(2));

        cartItems[name].inCart = 0;
        localStorage.setItem("productsInCart", JSON.stringify(cartItems));
        delete cartItems[name];
        localStorage.setItem("productsInCart", JSON.stringify(cartItems));
      });
  }
  /*if (cartItems) {
    Object.values(cartItems).map((item) => {
      var div = document.createElement("div");
      //div.setAttribute("class", "post block bc2");
      //  let n = addcart.childElementCount;

      div.innerHTML = `
  <div class="cart__product">
  <div class="line1">
      <figure class="cart__product-fig">
          <img src="${item.src}" alt="product picture" class="cart__product-image" />
          <figcaption class="cart__product-text">${item.name}</figcaption>
      </figure>
      <h1 class="cart__product-price"><span style="font-size: 2rem;">${item.price}</span> dt </h1>
  </div>
  <div class="line2">
      <div class="qt">
          <span>Qt :</span> <input type="number" min="1" value="${item.inCart}" class="cart__product-quantity">
      </div>
      <button class="cart__product-button"> <svg class="cart__product-button-icon">
              <use xlink:href="img/sprite.svg#icon-svgcredit-card"></use>
          </svg>
          <span class="cart__product-button-text">by now</span></button>
  </div>

</div>
  `;
      document.querySelector(".addtocart").appendChild(div);
    });
  }*/
}
function closeprod() {
  let y = document.querySelectorAll(".cart__product").length;
  let procart = document.querySelectorAll(".cart__product-close");
  let tott = 0.0;
  if (localStorage.getItem("totalCost")) {
    document.querySelector(".total-price").textContent = parseFloat(
      localStorage.getItem("totalCost")
    );
  }
  console.log(y);

  for (let i = 0; i < y; i++) {
    procart[i].addEventListener("click", function () {
      this.parentElement.parentElement.classList.add("hidden");
      this.parentElement.querySelector(".cart__product-quantity").value = 0;

      let name = this.parentElement.querySelector(
        ".cart__product-text"
      ).textContent;
      let cartItems = localStorage.getItem("productsInCart");
      cartItems = JSON.parse(cartItems);

      let tot = localStorage.getItem("totalCost");

      // tot -= cartItems[name].price * cartItems[name].inCart;
      //localStorage.setItem("totalCost", parseFloat(tot).toFixed(2));

      cartItems[name].inCart = 0;
      localStorage.setItem("productsInCart", JSON.stringify(cartItems));
      delete cartItems[name];
      localStorage.setItem("productsInCart", JSON.stringify(cartItems));
    });
  }
}
closeprod();

document.querySelector(".user__button").addEventListener("click", function () {
  document.querySelector(".user__dropdown").classList.toggle("hidden");
  document.querySelector(".none").classList.remove("hidden");
});
document.querySelector(".none").addEventListener("click", function () {
  document.querySelector(".user__dropdown").classList.add("hidden");
  document.querySelector(".addtocart").classList.remove("opencart");
  document.querySelector(".none").classList.add("hidden");
  document.querySelector(".none").style.transform = "scale(1.3)";
});

//nav barr galoryy  ******************************************

/**let nbr = document.querySelectorAll(".products__nav-bar-item").length;
let item = document.querySelectorAll(".products__nav-bar-item");
item[0].addEventListener("click", function () {
  for (let i = 0; i < nbr; i++) {
    item[i].classList.remove("active");
  }
 
  console.log(img);

  item[0].classList.add("active");
});
item[1].addEventListener("click", function () {
  for (let i = 0; i < nbr; i++) {
    item[i].classList.remove("active");
  }
  document.cookie = "variable= true";

  item[1].classList.add("active");
  document.querySelector(".products__galory").innerHTML = "";
});
*/

document.querySelector(".logout").addEventListener("click", function () {
  document.querySelector(".sign-in").classList.remove("hidden");
  document.querySelector(".sign-up").classList.remove("hidden");
  var aa = "<?php session_destroy(); ?>";

  //document.write("<?php session_destroy(); ?>");
});
