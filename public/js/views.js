/*
|----------------------------------------------------
| Global App View
|----------------------------------------------------
*/
App.Views.App = Backbone.View.extend({
	initialize: function() {
		// console.log( this.collection.toJSON() );
		var addContactView = new App.Views.AddContact();
	}
});

/*
|----------------------------------------------------
| Add Contact View
|----------------------------------------------------
*/
App.Views.AddContact = Backbone.View.extend({
	el: '#addContact',

	events: {
		'submit': 'addContact'
	},

	addContact: function(e) {
		e.preventDefault();

		console.log('add contact now');
	}
});