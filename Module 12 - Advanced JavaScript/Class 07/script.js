// this will keep the data on the browser, like a cookie
// localStorage.setItem("name","Morgan"); // set an item on local storage
// localStorage.getItem("name"); // get an item on local storage
// localStorage.removeItem("name"); //remove an item of local storage

// Now, the easier manner:
// localStorage.name = "Morgan"; // this is equal to localStorage.setItem("name","Morgan")
// localStorage.name; // this is equal to localStorage.getItem("name")
// there isn't a easier manner to remove an item

// sessionStorage is like the localStorage, but it's like a session, 
// it's destroied when the browser is closed

if (typeof localStorage.name == "undefined") {
	localStorage.name = prompt("What's your name?");
}

document.getElementById("info").innerHTML = localStorage.name;