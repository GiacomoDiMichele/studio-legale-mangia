/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

// require('./bootstrap');
var app = new Vue({
  el: '#root',
  data: {
    //creo la chiave per assegnare la base di partenza delle immagini nello slider, ad ogni click cambierà valore
    posizione_immagine: 0,
    //creo una chiave per inserire le immagini, questa volta tramite un array per contenere più elementi dello stesso tipo
    immagine: ['https://studioavvocatogargano.it/wp-content/uploads/2018/08/avengers1-1.png', 'images/avvocati-uno.jpg', 'images/avvocati-due.jpg', 'https://www.pixtury.com/photos/167AE4119C2-8957337235C14087944DFC/1.jpg']
  },
  //inserisco l'oggetto methods per creare due funzioni che mi facciano cambiare dinamicamente l'immagine al click
  methods: {
    //prima per la successiva
    immagine_successiva: function immagine_successiva() {
      //ad ogni interazione incremento l'indice pari al suo valore + 1
      this.posizione_immagine += 1; //se la posizione dell'immagine è maggiore della lunghezza dell'array

      if (this.posizione_immagine > this.immagine.length - 1) {
        //riassegno il valore di partenza, ovvero della posizione della prima immagine
        this.posizione_immagine = 0;
      }
    },
    //subito dopo per quella precedente
    immagine_precedente: function immagine_precedente() {
      //decremento di 1 l'indice ad ogni interazione
      this.posizione_immagine -= 1; //se la posizione dell'immagine è minore di 0, quindi -1(che non può esistere) gli riassegno il valore dell'ultima posizione nell'array di immagini

      if (this.posizione_immagine < 0) {
        this.posizione_immagine = this.immagine.length - 1;
      }
    }
  }
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\MAMP\htdocs\boolean\esercizi\studio-legale-mangia\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\MAMP\htdocs\boolean\esercizi\studio-legale-mangia\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });