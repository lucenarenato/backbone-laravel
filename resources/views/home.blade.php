<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
<h1>Contacts</h1>

<form id="addContact">
    <div>
        <label for="first_name">First Name: </label>
        <input type="text" id="first_name" name="first_name">
    </div>

    <div>
        <label for="last_name">Last Name: </label>
        <input type="text" id="last_name" name="last_name">
    </div>

    <div>
        <label for="email_adress">Email Adress: </label>
        <input type="text" id="email_adress" name="email_adress">
    </div>

    <div>
        <label for="description">Description: </label>
        <textarea id="description" name="description"></textarea>        
    </div>

    <div>
        <input type="submit" value="Add Contact">
    </div>

</form>


<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://underscorejs.org/underscore.js"></script>
<script src="http://backbonejs.org/backbone.js"></script>
<script src="js/main.js"></script>
<script src="js/models.js"></script>
<script src="js/router.js"></script>
<script src="js/collections.js"></script>
<script src="js/views.js"></script>

<script>
    new App.Router;
    Backbone.history.start();

    App.contacts = new App.Collections.Contacts;
    App.contacts.fetch().then(function(){
        new App.Views.App({ collection: App.contacts });
    });

</script>

</body>
</html>