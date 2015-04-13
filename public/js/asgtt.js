$.widget('root.listeAdmin',{
	_create: function(){
		this.options.add = $('.add');
		this.options.add.bind('click', $.proxy(this.addClicked,this));

	},
	addClicked: function(event){
		var url = this.options.add.attr('href');
		this.openModal(url);
		return false;
	},
	openModal: function(url){
		var modal = $("<div title='Ajouter un Admin'></div>");
		modal.load(url, $.proxy(this.modalLoaded,this));
		modal.dialog({'width': 700, 'height':550});
		console.log(url)
		this.options.modal = modal;
		return false;
	},
	modalLoaded: function(){
		$('#cancelButton',this.options.modal).bind('click', $.proxy(this.closeModal, this));
		$('submit',this.options.modal).bind('click',$.proxy(this.addAdmin,this));
		return false; 
	},
	addAdmin: function(){
		alert('test');
		$('#content').load('/listeAdmin',$.proxy(this.modalLoaded,this));
		return false;
	},
	closeModal: function(){
		this.options.modal.dialog('close');
	},
	options: {
		add: null,
		modal: null,
	}
});