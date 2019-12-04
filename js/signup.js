import { MDCTextField } from '@material/textfield';
import { MDCRipple } from '@material/ripple';

document.querySelectorAll('.mdc-button').forEach(el => {
	new MDCRipple(el);
});

const username = new MDCTextField(document.querySelector('.username'));
const password = new MDCTextField(document.querySelector('.password'));
const passwordConfirm = new MDCTextField(document.querySelector('.password-confirm'));
