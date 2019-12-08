const dummyResults = [
	{
		name: 'Sinarest',
		price: '50',
		company: 'Alpha Pharmaceuticals',
		mfg: '08/12/19',
		exp: '08/12/20'
	},
	{
		name: 'Crocin',
		price: '20',
		company: 'Alpha Pharmaceuticals',
		mfg: '08/12/19',
		exp: '08/12/20'
	}
];

let cart = JSON.parse(localStorage.getItem('cart')) || {};

const listItemElement = document
	.querySelector('#medicine-template')
	.content.querySelector('.collection-item');
const listElement = document.querySelector('#medicine-list');

function displayResults(results) {
	results.forEach(result => {
		let newListElement = document.importNode(listItemElement, true);

		newListElement.querySelector('.medicine-name').textContent = result.name;
		newListElement.querySelector('.price').textContent = `₹ ${result.price}`;
		newListElement.querySelector('.company').textContent = result.company;
		newListElement.querySelector('.mfg').textContent = `Mfg: ${result.mfg}`;
		newListElement.querySelector('.exp').textContent = `Exp: ${result.exp}`;

		newListElement.querySelector('.add-btn').addEventListener('click', () => {
			let quantity = newListElement.querySelector('.quantity-input').value;
			cart[result.name] = { ...result, quantity: quantity };
			console.log(cart);

			localStorage.setItem('cart', JSON.stringify(cart));
			M.toast({ html: `${quantity} ${result.name} added to cart` });
		});

		listElement.appendChild(newListElement);
	});
}

displayResults(dummyResults);
