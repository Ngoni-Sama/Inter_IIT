const dummyResults = [
	{
		name: 'Sinarest',
		price: '50',
		company: 'Alpha Pharmaceuticals',
		quantity: 3,
		mfg: '08/12/19',
		exp: '08/12/20'
	},
	{
		name: 'Crocin',
		price: '20',
		company: 'Alpha Pharmaceuticals',
		quantity: 4,
		mfg: '08/12/19',
		exp: '08/12/20'
	}
];

const listItemElement = document
	.querySelector('#medicine-template')
	.content.querySelector('.collection-item');
const listElement = document.querySelector('#medicine-list');

function displayResults(results) {
	for (const medicineName in results) {
		if (results.hasOwnProperty(medicineName)) {
			const result = results[medicineName];
			const newListElement = document.importNode(listItemElement, true);
			const quantityInput = newListElement.querySelector('.quantity-input');

			newListElement.querySelector('.medicine-name').textContent = result.name;
			newListElement.querySelector('.price').textContent = `₹ ${result.price}`;
			newListElement.querySelector('.company').textContent = result.company;
			newListElement.querySelector('.mfg').textContent = `Mfg: ${result.mfg}`;
			newListElement.querySelector('.exp').textContent = `Exp: ${result.exp}`;
			newListElement.querySelector('.max').textContent = result.quantity;
			quantityInput.max = result.quantity;

			listElement.appendChild(newListElement);
		}
	}
}

displayResults(dummyResults);
