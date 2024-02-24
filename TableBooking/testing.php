body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: white;
    color: red;
    padding: 1em;
    text-align: left;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo-container {
    display: flex;
    align-items: flex-end;
}

header img {
    margin-right: 20px;
}

h1 {
    margin: 0;
    margin-left: 10px;
}

h1,
p {
    margin: 0;
    margin-left: 0;
}

h3 {
    color: black;
    font-size: medium;
    text-align: left;
}

h4 {
    color: red;
}

h4,
p {
    padding-right: 15px;
}

nav {
    display: flex;
    margin-left: auto;
}

nav a {
    color: red;
    text-decoration: none;
    padding: 1em;
    margin: 0 1em;
    font-weight: bold;
}

.form-group {
    margin-bottom: 20px;
    text-align: left;
}

label {
    display: inline-block;
    margin-bottom: 5px;
    text-align: left;
}

input,
textarea {
    width: 100%;
    padding: 10px;
    border: 0.5px solid #ccc;
}

button {
    background-color: #0578ec;
    color: rgb(255, 252, 252);
    padding: 5px 10px;
    border: none;
    cursor: pointer;
}

.footer {
    display: flex;
    justify-content: space-around;
    background-size: cover;
    background-position: center;
    color: white;
    position: relative;
    background-image: url(image/footer\ image.jpg);
    margin-top: 11px;
}

.footer::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.5);
}

.footer-col {
    background-color: rgba(0, 0, 0, 0.7);
    border-radius: 5px;
    width: 25%;
    float: left;
    box-sizing: border-box;
    padding: 10px;
    color: white;
}

.contact-info {
    margin-top: 10px;
}

.contact-item {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.contact-item img {
    width: 20px;
    height: 20px;
    margin-right: 5px;
}

.contact {
    text-align: center;
    margin-top: 20px;
}

.footer-col.social-icons {
    text-align: center;
}

.social-icons-container {
    margin-top: 10px;
}

.social-icons-container a {
    display: inline-block;
    margin: 0 10px;
}

.social-icons-container img {
    width: 30px;
    height: 30px;
}

.image-container {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
}

.image-container img {
    width: 30%;
    height: auto;
}

#home {
    padding: 2em;
    text-align: center;
}

.content-container {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

@media screen and (max-width: 600px) {
    h1 {
        font-size: 1.5em;
    }
    p {
        font-size: 0.8em;
    }
    .image-container img {
        width: 100%;
    }
}

/* Additional styles from the second CSS */

.restaurant-info h1 {
    margin: 0;
}

.nav {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

.nav a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
}

.main-menu {
    padding: 20px;
}

.menu-item {
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.menu-item img {
    width: 100%;
    height: auto;
}

.menu-item-details {
    padding: 20px;
}

.menu-item h2 {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    margin-top: 0;
    margin-bottom: 10px;
    text-align: center;
}

.menu-item h3 {
    margin-top: 0;
}

.menu-item p {
    margin-bottom: 0;
}

.menu-item .price {
    display: block;
}

form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

h2 {
    text-align: center;
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.error-message {
    color: red;
    font-style: italic;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h1,
h2 {
    text-align: center;
}

.cart-items {
    margin-bottom: 20px;
}

.item {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
}

form {
    margin-top: 20px;
}

form label {
    display: block;
    margin-bottom: 5px;
}

form input[type="text"],
form input[type="email"],
form textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

form textarea {
    height: 100px;
}

form input[type="radio"] {
    margin-right: 5px;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

button[type="submit"]:hover {
    background-color: #45a049;
}

