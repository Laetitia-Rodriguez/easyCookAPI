# EASYCOOK

EasyCook is an app offering simple recipes from ingredients available in my food cupboard and fridge.

It's an app that I intend for private use, also the list of ingredients and recipes are very personal and not very detailed.
But in a second step, it will be possible to enrich the data.

Stack : PHP, Symfony, APIPlatform, JS, React, Redux

- easyCookAPI
- easyCookFront

## Minimum Valuable Product

### Homepage :

Title and description of the app.

- two areas giving access to two search mode : by ingredients, or by food cupboard

The ingredient search mode is a quick way to use the app : it's a search input that leads to the results page.

### Page search by food cupboard

Interface to select all the ingredients available :

- buttons to click with the name of each group of ingredients : fruits and vegetables, meat, seafood...
  
- When clicking on a group, the sub-groups appear : vegetables, meat, poultry, fish...

- When clicking on a sub-group, the picture of each ingredient and its name appear.

- When clicking on an ingredient, it changes its appareance to indicate that it is selected.

- When submitting, with the selected ingredients, it leads to the results page.

### Results page :

- list of recipe results with for each a picture and title that lead to the recipe page

### Recipe page :

- Title, picture, ingredients list and steps of the recipe
- Button to return to homepage


## Version 2

### Sign up page

- form to sign up


### Sign in page

- form to sign in

### Homepage

- a button to access our profile

### Profile page

- area that lead to the function "change user data"
  
- area that lead to the function "manage my favourites"
  
- area that lead to the function "manage my food cupboard"

### Page "change user datas"

- form to change the user name and email

### Page "manage my favourites"

- List of ma favourites recipes, with the picture and name like on results page, plus a small heart icone
  
- When clicking on a recipe, it leads to the recipe page.

- When clicking on a heart icone colorful (favourite), it deletes the recipe from the favourites list.

### Page "manage my cupboard"

- Same interface than page "search by food cupboard", but any modification of this list is saved with the user's profile (it records in bdd "profile_product" table).

### Page "search by food cupboard"

- When user is authenticated, if there are favourite products in his profile, it appears in this page by default.