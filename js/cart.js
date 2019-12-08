let cart = JSON.parse(localStorage.getItem('cart')) || {};

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
			quantityInput.value = result.quantity;

			quantityInput.addEventListener('input', event => {
				cart[result.name].quantity = event.target.value;
				updateCart();
			});

			newListElement.querySelector('.remove-btn').addEventListener('click', () => {
				delete cart[result.name];
				updateCart();
				newListElement.remove();
				M.toast({ html: `${result.name} Removed` });
			});

			listElement.appendChild(newListElement);
		}
	}
}

const updateCart = () => localStorage.setItem('cart', JSON.stringify(cart));

displayResults(cart);
