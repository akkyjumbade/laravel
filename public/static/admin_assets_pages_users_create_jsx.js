"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["admin_assets_pages_users_create_jsx"],{

/***/ "./node_modules/@react-aria/breadcrumbs/dist/module.js":
/*!*************************************************************!*\
  !*** ./node_modules/@react-aria/breadcrumbs/dist/module.js ***!
  \*************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "useBreadcrumbItem": () => (/* binding */ $dafd15390222438a$export$452b38fce62c9384),
/* harmony export */   "useBreadcrumbs": () => (/* binding */ $848231d7a2b3998e$export$8cefe241bd876ca0)
/* harmony export */ });
/* harmony import */ var _react_aria_link__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @react-aria/link */ "./node_modules/@react-aria/link/dist/module.js");
/* harmony import */ var _react_aria_utils__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @react-aria/utils */ "./node_modules/@react-aria/utils/dist/module.js");
/* harmony import */ var _react_aria_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @react-aria/i18n */ "./node_modules/@react-aria/i18n/dist/module.js");




function $parcel$export(e, n, v, s) {
  Object.defineProperty(e, n, {get: v, set: s, enumerable: true, configurable: true});
}
function $parcel$interopDefault(a) {
  return a && a.__esModule ? a.default : a;
}
var $dafd15390222438a$exports = {};

$parcel$export($dafd15390222438a$exports, "useBreadcrumbItem", () => $dafd15390222438a$export$452b38fce62c9384);

function $dafd15390222438a$export$452b38fce62c9384(props, ref) {
    let { isCurrent: isCurrent , isDisabled: isDisabled , 'aria-current': ariaCurrent , elementType: elementType = 'a' , ...otherProps } = props;
    let { linkProps: linkProps  } = (0,_react_aria_link__WEBPACK_IMPORTED_MODULE_0__.useLink)({
        isDisabled: isDisabled || isCurrent,
        elementType: elementType,
        ...otherProps
    }, ref);
    let isHeading = /^h[1-6]$/.test(elementType);
    let itemProps = {
    };
    if (!isHeading) itemProps = linkProps;
    if (isCurrent) itemProps['aria-current'] = ariaCurrent || 'page';
    return {
        itemProps: {
            'aria-disabled': isDisabled,
            ...itemProps
        }
    };
}


var $848231d7a2b3998e$exports = {};

$parcel$export($848231d7a2b3998e$exports, "useBreadcrumbs", () => $848231d7a2b3998e$export$8cefe241bd876ca0);

var $28dc7e2f5ed40c80$exports = {};
var $b91590b2dc47de39$exports = {};
$b91590b2dc47de39$exports = JSON.parse("{\"breadcrumbs\":\"عناصر الواجهة\"}");


var $55b0693b2cf3fe91$exports = {};
$55b0693b2cf3fe91$exports = JSON.parse("{\"breadcrumbs\":\"Трохи хляб\"}");


var $6ec1ed7729e948cc$exports = {};
$6ec1ed7729e948cc$exports = JSON.parse("{\"breadcrumbs\":\"Popis cesty\"}");


var $5a41bb2baa6861e4$exports = {};
$5a41bb2baa6861e4$exports = JSON.parse("{\"breadcrumbs\":\"Brødkrummer\"}");


var $f28bbea439e87eca$exports = {};
$f28bbea439e87eca$exports = JSON.parse("{\"breadcrumbs\":\"Breadcrumbs\"}");


var $b3eca51cb720961a$exports = {};
$b3eca51cb720961a$exports = JSON.parse("{\"breadcrumbs\":\"Πλοηγήσεις breadcrumb\"}");


var $0b39b205118db415$exports = {};
$0b39b205118db415$exports = JSON.parse("{\"breadcrumbs\":\"Breadcrumbs\"}");


var $f467c0ee7bfb0950$exports = {};
$f467c0ee7bfb0950$exports = JSON.parse("{\"breadcrumbs\":\"Migas de pan\"}");


var $ab711d2ffb4cdf3d$exports = {};
$ab711d2ffb4cdf3d$exports = JSON.parse("{\"breadcrumbs\":\"Lingiread\"}");


var $b63105d663e6f9d5$exports = {};
$b63105d663e6f9d5$exports = JSON.parse("{\"breadcrumbs\":\"Navigointilinkit\"}");


var $9d2ed7be7fcdc2a1$exports = {};
$9d2ed7be7fcdc2a1$exports = JSON.parse("{\"breadcrumbs\":\"Chemin de navigation\"}");


var $c5704294d85c7b5d$exports = {};
$c5704294d85c7b5d$exports = JSON.parse("{\"breadcrumbs\":\"שבילי ניווט\"}");


var $20c975671d6bbc63$exports = {};
$20c975671d6bbc63$exports = JSON.parse("{\"breadcrumbs\":\"Navigacijski putovi\"}");


var $2569ca3917233115$exports = {};
$2569ca3917233115$exports = JSON.parse("{\"breadcrumbs\":\"Morzsamenü\"}");


var $caa152f7f8e96c85$exports = {};
$caa152f7f8e96c85$exports = JSON.parse("{\"breadcrumbs\":\"Breadcrumb\"}");


var $cbc6af0cc98fad10$exports = {};
$cbc6af0cc98fad10$exports = JSON.parse("{\"breadcrumbs\":\"パンくずリスト\"}");


var $ad9be5d332b4d607$exports = {};
$ad9be5d332b4d607$exports = JSON.parse("{\"breadcrumbs\":\"탐색 표시\"}");


var $659de19a00ff9617$exports = {};
$659de19a00ff9617$exports = JSON.parse("{\"breadcrumbs\":\"Naršymo kelias\"}");


var $173e9fb4d14fe309$exports = {};
$173e9fb4d14fe309$exports = JSON.parse("{\"breadcrumbs\":\"Atpakaļceļi\"}");


var $d8e2640a066567a9$exports = {};
$d8e2640a066567a9$exports = JSON.parse("{\"breadcrumbs\":\"Navigasjonsstier\"}");


var $d71fd764236c0d12$exports = {};
$d71fd764236c0d12$exports = JSON.parse("{\"breadcrumbs\":\"Broodkruimels\"}");


var $f4ad3faf9f4aaec6$exports = {};
$f4ad3faf9f4aaec6$exports = JSON.parse("{\"breadcrumbs\":\"Struktura nawigacyjna\"}");


var $9703be9d55d8e9c2$exports = {};
$9703be9d55d8e9c2$exports = JSON.parse("{\"breadcrumbs\":\"Caminho detalhado\"}");


var $7e23baec8a14f309$exports = {};
$7e23baec8a14f309$exports = JSON.parse("{\"breadcrumbs\":\"Categorias\"}");


var $568f95594049d56e$exports = {};
$568f95594049d56e$exports = JSON.parse("{\"breadcrumbs\":\"Miez de pâine\"}");


var $625df06cecc70764$exports = {};
$625df06cecc70764$exports = JSON.parse("{\"breadcrumbs\":\"Навигация\"}");


var $b5a67525f3a2f594$exports = {};
$b5a67525f3a2f594$exports = JSON.parse("{\"breadcrumbs\":\"Navigačné prvky Breadcrumbs\"}");


var $16125922964febca$exports = {};
$16125922964febca$exports = JSON.parse("{\"breadcrumbs\":\"Drobtine\"}");


var $de104bf355206bcf$exports = {};
$de104bf355206bcf$exports = JSON.parse("{\"breadcrumbs\":\"Putanje navigacije\"}");


var $d5ab76bcbadc9c07$exports = {};
$d5ab76bcbadc9c07$exports = JSON.parse("{\"breadcrumbs\":\"Sökvägar\"}");


var $a6a1af5968159b55$exports = {};
$a6a1af5968159b55$exports = JSON.parse("{\"breadcrumbs\":\"İçerik haritaları\"}");


var $5204a30f0d17ffec$exports = {};
$5204a30f0d17ffec$exports = JSON.parse("{\"breadcrumbs\":\"Навігаційна стежка\"}");


var $8d15e736e12d3dfd$exports = {};
$8d15e736e12d3dfd$exports = JSON.parse("{\"breadcrumbs\":\"导航栏\"}");


var $f8c49dd804b75140$exports = {};
$f8c49dd804b75140$exports = JSON.parse("{\"breadcrumbs\":\"導覽列\"}");


$28dc7e2f5ed40c80$exports = {
    "ar-AE": $b91590b2dc47de39$exports,
    "bg-BG": $55b0693b2cf3fe91$exports,
    "cs-CZ": $6ec1ed7729e948cc$exports,
    "da-DK": $5a41bb2baa6861e4$exports,
    "de-DE": $f28bbea439e87eca$exports,
    "el-GR": $b3eca51cb720961a$exports,
    "en-US": $0b39b205118db415$exports,
    "es-ES": $f467c0ee7bfb0950$exports,
    "et-EE": $ab711d2ffb4cdf3d$exports,
    "fi-FI": $b63105d663e6f9d5$exports,
    "fr-FR": $9d2ed7be7fcdc2a1$exports,
    "he-IL": $c5704294d85c7b5d$exports,
    "hr-HR": $20c975671d6bbc63$exports,
    "hu-HU": $2569ca3917233115$exports,
    "it-IT": $caa152f7f8e96c85$exports,
    "ja-JP": $cbc6af0cc98fad10$exports,
    "ko-KR": $ad9be5d332b4d607$exports,
    "lt-LT": $659de19a00ff9617$exports,
    "lv-LV": $173e9fb4d14fe309$exports,
    "nb-NO": $d8e2640a066567a9$exports,
    "nl-NL": $d71fd764236c0d12$exports,
    "pl-PL": $f4ad3faf9f4aaec6$exports,
    "pt-BR": $9703be9d55d8e9c2$exports,
    "pt-PT": $7e23baec8a14f309$exports,
    "ro-RO": $568f95594049d56e$exports,
    "ru-RU": $625df06cecc70764$exports,
    "sk-SK": $b5a67525f3a2f594$exports,
    "sl-SI": $16125922964febca$exports,
    "sr-SP": $de104bf355206bcf$exports,
    "sv-SE": $d5ab76bcbadc9c07$exports,
    "tr-TR": $a6a1af5968159b55$exports,
    "uk-UA": $5204a30f0d17ffec$exports,
    "zh-CN": $8d15e736e12d3dfd$exports,
    "zh-TW": $f8c49dd804b75140$exports
};



function $848231d7a2b3998e$export$8cefe241bd876ca0(props) {
    let { 'aria-label': ariaLabel , ...otherProps } = props;
    let formatMessage = (0,_react_aria_i18n__WEBPACK_IMPORTED_MODULE_1__.useMessageFormatter)((/*@__PURE__*/$parcel$interopDefault($28dc7e2f5ed40c80$exports)));
    return {
        navProps: {
            ...(0,_react_aria_utils__WEBPACK_IMPORTED_MODULE_2__.filterDOMProps)(otherProps, {
                labelable: true
            }),
            'aria-label': ariaLabel || formatMessage('breadcrumbs')
        }
    };
}





//# sourceMappingURL=module.js.map


/***/ }),

/***/ "./node_modules/@react-aria/link/dist/module.js":
/*!******************************************************!*\
  !*** ./node_modules/@react-aria/link/dist/module.js ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "useLink": () => (/* binding */ $298d61e98472621b$export$dcf14c9974fe2767)
/* harmony export */ });
/* harmony import */ var _react_aria_utils__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @react-aria/utils */ "./node_modules/@react-aria/utils/dist/module.js");
/* harmony import */ var _react_aria_focus__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @react-aria/focus */ "./node_modules/@react-aria/focus/dist/module.js");
/* harmony import */ var _react_aria_interactions__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @react-aria/interactions */ "./node_modules/@react-aria/interactions/dist/module.js");




function $parcel$export(e, n, v, s) {
  Object.defineProperty(e, n, {get: v, set: s, enumerable: true, configurable: true});
}
var $298d61e98472621b$exports = {};

$parcel$export($298d61e98472621b$exports, "useLink", () => $298d61e98472621b$export$dcf14c9974fe2767);



function $298d61e98472621b$export$dcf14c9974fe2767(props, ref) {
    let { elementType: elementType = 'a' , onPress: onPress , onPressStart: onPressStart , onPressEnd: onPressEnd , // @ts-ignore
    onClick: deprecatedOnClick , isDisabled: isDisabled , ...otherProps } = props;
    let linkProps;
    if (elementType !== 'a') linkProps = {
        role: 'link',
        tabIndex: !isDisabled ? 0 : undefined
    };
    let { focusableProps: focusableProps  } = (0,_react_aria_focus__WEBPACK_IMPORTED_MODULE_0__.useFocusable)(props, ref);
    let { pressProps: pressProps , isPressed: isPressed  } = (0,_react_aria_interactions__WEBPACK_IMPORTED_MODULE_1__.usePress)({
        onPress: onPress,
        onPressStart: onPressStart,
        onPressEnd: onPressEnd,
        isDisabled: isDisabled,
        ref: ref
    });
    let domProps = (0,_react_aria_utils__WEBPACK_IMPORTED_MODULE_2__.filterDOMProps)(otherProps, {
        labelable: true
    });
    let interactionHandlers = (0,_react_aria_utils__WEBPACK_IMPORTED_MODULE_2__.mergeProps)(focusableProps, pressProps);
    return {
        isPressed: isPressed,
        linkProps: (0,_react_aria_utils__WEBPACK_IMPORTED_MODULE_2__.mergeProps)(domProps, {
            ...interactionHandlers,
            ...linkProps,
            'aria-disabled': isDisabled || undefined,
            onClick: (e)=>{
                pressProps.onClick(e);
                if (deprecatedOnClick) {
                    deprecatedOnClick(e);
                    console.warn('onClick is deprecated, please use onPress');
                }
            }
        })
    };
}





//# sourceMappingURL=module.js.map


/***/ }),

/***/ "./admin/assets/components/molecules/Breadcrumb.jsx":
/*!**********************************************************!*\
  !*** ./admin/assets/components/molecules/Breadcrumb.jsx ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Breadcrumb)
/* harmony export */ });
/* harmony import */ var _emotion_styled__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @emotion/styled */ "./node_modules/@emotion/styled/dist/emotion-styled.browser.esm.js");
/* harmony import */ var _react_aria_breadcrumbs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @react-aria/breadcrumbs */ "./node_modules/@react-aria/breadcrumbs/dist/module.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react/jsx-runtime */ "./node_modules/react/jsx-runtime.js");
var _templateObject;

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) { symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); } keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _taggedTemplateLiteral(strings, raw) { if (!raw) { raw = strings.slice(0); } return Object.freeze(Object.defineProperties(strings, { raw: { value: Object.freeze(raw) } })); }






var StyledBreadcrumb = _emotion_styled__WEBPACK_IMPORTED_MODULE_0__["default"].nav(_templateObject || (_templateObject = _taggedTemplateLiteral(["\n   font-size: 13px;\n   ol {\n      display: flex;\n      list-style: none;\n      margin: 0;\n      padding: 0;\n   }\n"])));
function Breadcrumb(props) {
  var _useBreadcrumbs = (0,_react_aria_breadcrumbs__WEBPACK_IMPORTED_MODULE_3__.useBreadcrumbs)(props),
      navProps = _useBreadcrumbs.navProps;

  var children = react__WEBPACK_IMPORTED_MODULE_1___default().Children.toArray(props.children);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(StyledBreadcrumb, _objectSpread(_objectSpread({}, navProps), {}, {
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("ol", {
      children: children.map(function (child, i) {
        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_1___default().cloneElement(child, {
          isCurrent: i === children.length - 1
        });
      })
    })
  }));
}

function BreadcrumbItem(props) {
  var ref = react__WEBPACK_IMPORTED_MODULE_1___default().useRef();

  var _useBreadcrumbItem = (0,_react_aria_breadcrumbs__WEBPACK_IMPORTED_MODULE_3__.useBreadcrumbItem)(_objectSpread(_objectSpread({}, props), {}, {
    elementType: 'span'
  }), ref),
      itemProps = _useBreadcrumbItem.itemProps;

  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("li", {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", _objectSpread(_objectSpread({}, itemProps), {}, {
      ref: ref,
      style: {
        color: 'var(--blue)',
        textDecoration: props.isCurrent ? null : 'underline',
        fontWeight: props.isCurrent ? 'bold' : null,
        cursor: props.isCurrent ? 'default' : 'pointer'
      },
      children: props.children
    })), !props.isCurrent && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
      "aria-hidden": "true",
      style: {
        padding: '0 5px'
      },
      children: '›'
    })]
  });
}

Breadcrumb.Item = BreadcrumbItem;

/***/ }),

/***/ "./admin/assets/components/templates/Page.jsx":
/*!****************************************************!*\
  !*** ./admin/assets/components/templates/Page.jsx ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Page)
/* harmony export */ });
/* harmony import */ var _inertiajs_inertia_react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @inertiajs/inertia-react */ "./node_modules/@inertiajs/inertia-react/dist/index.js");
/* harmony import */ var _molecules_Breadcrumb__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../molecules/Breadcrumb */ "./admin/assets/components/molecules/Breadcrumb.jsx");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react/jsx-runtime */ "./node_modules/react/jsx-runtime.js");
var _excluded = ["children", "className"];

function _objectWithoutProperties(source, excluded) { if (source == null) return {}; var target = _objectWithoutPropertiesLoose(source, excluded); var key, i; if (Object.getOwnPropertySymbols) { var sourceSymbolKeys = Object.getOwnPropertySymbols(source); for (i = 0; i < sourceSymbolKeys.length; i++) { key = sourceSymbolKeys[i]; if (excluded.indexOf(key) >= 0) continue; if (!Object.prototype.propertyIsEnumerable.call(source, key)) continue; target[key] = source[key]; } } return target; }

function _objectWithoutPropertiesLoose(source, excluded) { if (source == null) return {}; var target = {}; var sourceKeys = Object.keys(source); var key, i; for (i = 0; i < sourceKeys.length; i++) { key = sourceKeys[i]; if (excluded.indexOf(key) >= 0) continue; target[key] = source[key]; } return target; }






function Page(_ref) {
  var title = _ref.title,
      children = _ref.children;

  var _usePage = (0,_inertiajs_inertia_react__WEBPACK_IMPORTED_MODULE_0__.usePage)(),
      errors = _usePage.props.errors;

  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("header", {
      className: "container mx-auto py-3",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_molecules_Breadcrumb__WEBPACK_IMPORTED_MODULE_1__["default"], {
        title: title
      }), title && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("h1", {
        className: "leading-10 text-3xl font-bold",
        children: title
      })]
    }), errors && Object.keys(errors).length > 0 && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
      className: "container mx-auto py-3 mb-4 bg-red-400 text-white px-4 rounded-md",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("ol", {
        className: "text-sm",
        children: Object.keys(errors).map(function (er) {
          return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("li", {
            children: errors[er]
          }, er);
        })
      })
    }), children]
  });
}

Page.Section = function (_ref2) {
  var children = _ref2.children,
      className = _ref2.className,
      rest = _objectWithoutProperties(_ref2, _excluded);

  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
    className: "container mx-auto ".concat(className),
    children: children
  });
};

/***/ }),

/***/ "./admin/assets/components/templates/index.js":
/*!****************************************************!*\
  !*** ./admin/assets/components/templates/index.js ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "Page": () => (/* reexport safe */ _Page__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _Page__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Page */ "./admin/assets/components/templates/Page.jsx");


/***/ }),

/***/ "./admin/assets/pages/users/create.jsx":
/*!*********************************************!*\
  !*** ./admin/assets/pages/users/create.jsx ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ create)
/* harmony export */ });
/* harmony import */ var _inertiajs_inertia__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @inertiajs/inertia */ "./node_modules/@inertiajs/inertia/dist/index.js");
/* harmony import */ var _inertiajs_inertia_react__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @inertiajs/inertia-react */ "./node_modules/@inertiajs/inertia-react/dist/index.js");
/* harmony import */ var _components_templates__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../components/templates */ "./admin/assets/components/templates/index.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react/jsx-runtime */ "./node_modules/react/jsx-runtime.js");
var _excluded = ["team", "errors"];

function _objectWithoutProperties(source, excluded) { if (source == null) return {}; var target = _objectWithoutPropertiesLoose(source, excluded); var key, i; if (Object.getOwnPropertySymbols) { var sourceSymbolKeys = Object.getOwnPropertySymbols(source); for (i = 0; i < sourceSymbolKeys.length; i++) { key = sourceSymbolKeys[i]; if (excluded.indexOf(key) >= 0) continue; if (!Object.prototype.propertyIsEnumerable.call(source, key)) continue; target[key] = source[key]; } } return target; }

function _objectWithoutPropertiesLoose(source, excluded) { if (source == null) return {}; var target = {}; var sourceKeys = Object.keys(source); var key, i; for (i = 0; i < sourceKeys.length; i++) { key = sourceKeys[i]; if (excluded.indexOf(key) >= 0) continue; target[key] = source[key]; } return target; }






function create(_ref) {
  var team = _ref.team,
      errors = _ref.errors,
      props = _objectWithoutProperties(_ref, _excluded);

  // const { props: { errors  }} = usePage()
  function onSubmit(e) {
    e.preventDefault();
    _inertiajs_inertia__WEBPACK_IMPORTED_MODULE_0__.Inertia.post(route('admin.users.store'), new FormData(e.target));
  }

  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)(_components_templates__WEBPACK_IMPORTED_MODULE_2__.Page, {
    title: 'User',
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)("form", {
      onSubmit: onSubmit,
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("input", {
        name: 'title'
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("button", {
        children: "Submit"
      })]
    }), JSON.stringify(errors)]
  });
}

/***/ })

}]);