import default from 'checklistApi';

$("form.checkbox__add").submit(function(e) {
	e.preventDefault();

	let item = $("input.checklist__input").val();
	Checklist::addItem(item);
});