let orders = [
	{
		id: '29382361',
		status: 'Delivered on Dec 11, 19',
		amount: 200
	},
	{
		id: '67381237',
		status: 'Delivered on Oct 11, 19',
		amount: 420
	}
];

const listElement = document.querySelector('#order-list');
const listItemTemplate = document.querySelector('#list-item');

orders.forEach(order => {
	const newListElement = document.importNode(listItemTemplate.content, true);

	newListElement.querySelector('.order-id').textContent = order.id;
	newListElement.querySelector('.status').textContent = order.status;
	newListElement.querySelector('.amount').textContent = order.amount;

	listElement.appendChild(newListElement);
});
