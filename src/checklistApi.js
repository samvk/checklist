let url = 'php/checklist.php';

class Checklist {
	/**
		addItem(item, [tags])
		@param {String} item text of new checklist item
		@param {String|Array} [tags]
		@return jqXHR
	*/
	static addItem(item, tags) {
		if (typeof tags === 'string') { tags = [tags]; }
		return $.ajax({
			url: url,
			type: 'POST',
			data: {
				"action": 'add',
				"item": item,
				"tags[]": tags
			}
		});
	}

	static deleteItem(itemId) {
		return $.ajax({
			url: url,
			type: 'POST',
			data: {
				"action": 'delete',
				"itemId": itemId,
			}
		});
	}

	static editItem(itemId, newItem) {
		return $.ajax({
			url: url,
			type: 'POST',
			data: {
				"action": 'edit',
				"itemId": itemId,
				"newItem": newItem
			}
		});
	}
}