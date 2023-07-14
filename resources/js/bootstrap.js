import axios from 'axios';
import * as Popper from '@popperjs/core'
import 'bootstrap'

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Popper = Popper