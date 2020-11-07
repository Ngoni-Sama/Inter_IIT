const listElement = document.querySelector('#list');
const listItemTemplate = document.querySelector('#list-item');

let order = {
	id: '29382361',
	status: 'Delivered on Nov 12, 20',
	amount: 10000,
	items: [
		{
			name: 'Medicine A',
			price: 1000,
			quantity: 5,
			company: 'Brismed Pharmaceuticals',
			mfg: '10/11/12',
			exp: '10/11/13'
		},
		{
			name: 'Medicine B',
			price: 1000,
			quantity: 5,
			company: 'Brismed Pharmaceuticals',
			mfg: '10/11/19',
			exp: '10/11/22'
		}
	]
};

function displayOrder(order) {
	listElement.querySelector('.order-id').textContent = order.id;
	listElement.querySelector('.status').textContent = order.status;
	listElement.querySelector('.grand-total').textContent = order.amount;

	order.items.forEach(item => {
		const newListItemElement = document.importNode(listItemTemplate.content, true);

		newListItemElement.querySelector('.medicine-name').textContent = item.name;
		newListItemElement.querySelector('.price').textContent = item.price;
		newListItemElement.querySelector('.quantity').textContent = item.quantity;
		newListItemElement.querySelector('.company').textContent = item.company;
		newListItemElement.querySelector('.mfg').textContent = item.mfg;
		newListItemElement.querySelector('.exp').textContent = item.exp;
		newListItemElement.querySelector('.net-price').textContent = item.quantity * item.price;

		listElement.appendChild(newListItemElement);
	});
}

displayOrder(order);
