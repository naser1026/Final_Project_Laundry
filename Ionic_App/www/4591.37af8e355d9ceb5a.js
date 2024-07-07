"use strict";(self.webpackChunkapp=self.webpackChunkapp||[]).push([[4591],{4591:(F,v,c)=>{c.r(v),c.d(v,{ion_button:()=>_,ion_icon:()=>M});var i=c(5539),x=c(4920),p=c(4929),u=c(333),w=c(3635);let f;const l=(o,t,n,e,r)=>(n="ios"===(n&&y(n))?"ios":"md",e&&"ios"===n?o=y(e):r&&"md"===n?o=y(r):(!o&&t&&!m(t)&&(o=t),d(o)&&(o=y(o))),d(o)&&""!==o.trim()&&""===o.replace(/[a-z]|-|\d/gi,"")?o:null),h=o=>d(o)&&(o=o.trim(),m(o))?o:null,m=o=>o.length>0&&/(\/|\.)/.test(o),d=o=>"string"==typeof o,y=o=>o.toLowerCase(),S=o=>o&&""!==o.dir?"rtl"===o.dir.toLowerCase():"rtl"===(null==document?void 0:document.dir.toLowerCase()),_=class{constructor(o){(0,i.r)(this,o),this.ionFocus=(0,i.d)(this,"ionFocus",7),this.ionBlur=(0,i.d)(this,"ionBlur",7),this.inItem=!1,this.inListHeader=!1,this.inToolbar=!1,this.formButtonEl=null,this.formEl=null,this.inheritedAttributes={},this.handleClick=t=>{const{el:n}=this;"button"===this.type?(0,u.o)(this.href,t,this.routerDirection,this.routerAnimation):(0,x.l)(n)&&this.submitForm(t)},this.onFocus=()=>{this.ionFocus.emit()},this.onBlur=()=>{this.ionBlur.emit()},this.slotChanged=()=>{this.isCircle=this.hasIconOnly},this.isCircle=!1,this.color=void 0,this.buttonType="button",this.disabled=!1,this.expand=void 0,this.fill=void 0,this.routerDirection="forward",this.routerAnimation=void 0,this.download=void 0,this.href=void 0,this.rel=void 0,this.shape=void 0,this.size=void 0,this.strong=!1,this.target=void 0,this.type="button",this.form=void 0}disabledChanged(){const{disabled:o}=this;this.formButtonEl&&(this.formButtonEl.disabled=o)}renderHiddenButton(){const o=this.formEl=this.findForm();if(o){const{formButtonEl:t}=this;if(null!==t&&o.contains(t))return;const n=this.formButtonEl=document.createElement("button");n.type=this.type,n.style.display="none",n.disabled=this.disabled,o.appendChild(n)}}componentWillLoad(){this.inToolbar=!!this.el.closest("ion-buttons"),this.inListHeader=!!this.el.closest("ion-list-header"),this.inItem=!!this.el.closest("ion-item")||!!this.el.closest("ion-item-divider"),this.inheritedAttributes=(0,x.i)(this.el)}get hasIconOnly(){return!!this.el.querySelector('[slot="icon-only"]')}get rippleType(){return(void 0===this.fill||"clear"===this.fill)&&this.hasIconOnly&&this.inToolbar?"unbounded":"bounded"}findForm(){const{form:o}=this;if(o instanceof HTMLFormElement)return o;if("string"==typeof o){const t=document.getElementById(o);return t?t instanceof HTMLFormElement?t:((0,p.p)(`Form with selector: "#${o}" could not be found. Verify that the id is attached to a <form> element.`,this.el),null):((0,p.p)(`Form with selector: "#${o}" could not be found. Verify that the id is correct and the form is rendered in the DOM.`,this.el),null)}return void 0!==o?((0,p.p)('The provided "form" element is invalid. Verify that the form is a HTMLFormElement and rendered in the DOM.',this.el),null):this.el.closest("form")}submitForm(o){this.formEl&&this.formButtonEl&&(o.preventDefault(),this.formButtonEl.click())}render(){const o=(0,w.b)(this),{buttonType:t,type:n,disabled:e,rel:r,target:k,size:g,href:O,color:G,expand:A,hasIconOnly:N,shape:B,strong:J,inheritedAttributes:Q}=this,T=void 0===g&&this.inItem?"small":g,D=void 0===O?"button":"a",Y="button"===D?{type:n}:{download:this.download,href:O,rel:r,target:k};let I=this.fill;return null==I&&(I=this.inToolbar||this.inListHeader?"clear":"solid"),"button"!==n&&this.renderHiddenButton(),(0,i.h)(i.f,{key:"8f3a0363d46ef888d22b0b0812c70cb4f79e6efa",onClick:this.handleClick,"aria-disabled":e?"true":null,class:(0,u.c)(G,{[o]:!0,[t]:!0,[`${t}-${A}`]:void 0!==A,[`${t}-${T}`]:void 0!==T,[`${t}-${B}`]:void 0!==B,[`${t}-${I}`]:!0,[`${t}-strong`]:J,"in-toolbar":(0,u.h)("ion-toolbar",this.el),"in-toolbar-color":(0,u.h)("ion-toolbar[color]",this.el),"in-buttons":(0,u.h)("ion-buttons",this.el),"button-has-icon-only":N,"button-disabled":e,"ion-activatable":!0,"ion-focusable":!0})},(0,i.h)(D,Object.assign({key:"a517c7d06aab15ad4c2a51b8ec224c1aeb4ed565"},Y,{class:"button-native",part:"native",disabled:e,onFocus:this.onFocus,onBlur:this.onBlur},Q),(0,i.h)("span",{key:"127c26dd97c0bf5097433df77df7313d59784899",class:"button-inner"},(0,i.h)("slot",{key:"39d9a9cad8e1addbe63406062e555e05c2cb541b",name:"icon-only",onSlotchange:this.slotChanged}),(0,i.h)("slot",{key:"cfdebdd89155c6c21eb80e51e06456a3a6d877e0",name:"start"}),(0,i.h)("slot",{key:"eac497e0f97ab55baa834ae23155d89b0f7069c6"}),(0,i.h)("slot",{key:"c99f7900f8856b32a0b4ac11092d461f5e9a1109",name:"end"})),"md"===o&&(0,i.h)("ion-ripple-effect",{key:"c681edb0480879fbd801575f2233f6e118898638",type:this.rippleType})))}get el(){return(0,i.i)(this)}static get watchers(){return{disabled:["disabledChanged"]}}};_.style={ios:':host{--overflow:hidden;--ripple-color:currentColor;--border-width:initial;--border-color:initial;--border-style:initial;--color-activated:var(--color);--color-focused:var(--color);--color-hover:var(--color);--box-shadow:none;display:inline-block;width:auto;color:var(--color);font-family:var(--ion-font-family, inherit);text-align:center;text-decoration:none;white-space:normal;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;vertical-align:top;vertical-align:-webkit-baseline-middle;-webkit-font-kerning:none;font-kerning:none}:host(.button-disabled){cursor:default;opacity:0.5;pointer-events:none}:host(.button-solid){--background:var(--ion-color-primary, #0054e9);--color:var(--ion-color-primary-contrast, #fff)}:host(.button-outline){--border-color:var(--ion-color-primary, #0054e9);--background:transparent;--color:var(--ion-color-primary, #0054e9)}:host(.button-clear){--border-width:0;--background:transparent;--color:var(--ion-color-primary, #0054e9)}:host(.button-block){display:block}:host(.button-block) .button-native{margin-left:0;margin-right:0;width:100%;clear:both;contain:content}:host(.button-block) .button-native::after{clear:both}:host(.button-full){display:block}:host(.button-full) .button-native{margin-left:0;margin-right:0;width:100%;contain:content}:host(.button-full:not(.button-round)) .button-native{border-radius:0;border-right-width:0;border-left-width:0}.button-native{border-radius:var(--border-radius);-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;margin-left:0;margin-right:0;margin-top:0;margin-bottom:0;-webkit-padding-start:var(--padding-start);padding-inline-start:var(--padding-start);-webkit-padding-end:var(--padding-end);padding-inline-end:var(--padding-end);padding-top:var(--padding-top);padding-bottom:var(--padding-bottom);font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;letter-spacing:inherit;text-decoration:inherit;text-indent:inherit;text-overflow:inherit;text-transform:inherit;text-align:inherit;white-space:inherit;color:inherit;display:-ms-flexbox;display:flex;position:relative;-ms-flex-align:center;align-items:center;width:100%;height:100%;min-height:inherit;-webkit-transition:var(--transition);transition:var(--transition);border-width:var(--border-width);border-style:var(--border-style);border-color:var(--border-color);outline:none;background:var(--background);line-height:1;-webkit-box-shadow:var(--box-shadow);box-shadow:var(--box-shadow);contain:layout style;cursor:pointer;opacity:var(--opacity);overflow:var(--overflow);z-index:0;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-appearance:none;-moz-appearance:none;appearance:none}.button-native::-moz-focus-inner{border:0}.button-inner{display:-ms-flexbox;display:flex;position:relative;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-negative:0;flex-shrink:0;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;width:100%;height:100%;z-index:1}::slotted([slot=start]),::slotted([slot=end]){-ms-flex-negative:0;flex-shrink:0}::slotted(ion-icon){font-size:1.35em;pointer-events:none}::slotted(ion-icon[slot=start]){-webkit-margin-start:-0.3em;margin-inline-start:-0.3em;-webkit-margin-end:0.3em;margin-inline-end:0.3em;margin-top:0;margin-bottom:0}::slotted(ion-icon[slot=end]){-webkit-margin-start:0.3em;margin-inline-start:0.3em;-webkit-margin-end:-0.2em;margin-inline-end:-0.2em;margin-top:0;margin-bottom:0}ion-ripple-effect{color:var(--ripple-color)}.button-native::after{left:0;right:0;top:0;bottom:0;position:absolute;content:"";opacity:0}:host(.ion-focused){color:var(--color-focused)}:host(.ion-focused) .button-native::after{background:var(--background-focused);opacity:var(--background-focused-opacity)}@media (any-hover: hover){:host(:hover){color:var(--color-hover)}:host(:hover) .button-native::after{background:var(--background-hover);opacity:var(--background-hover-opacity)}}:host(.ion-activated){color:var(--color-activated)}:host(.ion-activated) .button-native::after{background:var(--background-activated);opacity:var(--background-activated-opacity)}:host(.button-solid.ion-color) .button-native{background:var(--ion-color-base);color:var(--ion-color-contrast)}:host(.button-outline.ion-color) .button-native{border-color:var(--ion-color-base);background:transparent;color:var(--ion-color-base)}:host(.button-clear.ion-color) .button-native{background:transparent;color:var(--ion-color-base)}:host(.in-toolbar:not(.ion-color):not(.in-toolbar-color)) .button-native{color:var(--ion-toolbar-color, var(--color))}:host(.button-outline.in-toolbar:not(.ion-color):not(.in-toolbar-color)) .button-native{border-color:var(--ion-toolbar-color, var(--color, var(--border-color)))}:host(.button-solid.in-toolbar:not(.ion-color):not(.in-toolbar-color)) .button-native{background:var(--ion-toolbar-color, var(--background));color:var(--ion-toolbar-background, var(--color))}:host{--border-radius:14px;--padding-top:13px;--padding-bottom:13px;--padding-start:1em;--padding-end:1em;--transition:background-color, opacity 100ms linear;-webkit-margin-start:2px;margin-inline-start:2px;-webkit-margin-end:2px;margin-inline-end:2px;margin-top:4px;margin-bottom:4px;min-height:3.1em;font-size:min(1rem, 48px);font-weight:500;letter-spacing:0}:host(.button-solid){--background-activated:var(--ion-color-primary-shade, #004acd);--background-focused:var(--ion-color-primary-shade, #004acd);--background-hover:var(--ion-color-primary-tint, #1a65eb);--background-activated-opacity:1;--background-focused-opacity:1;--background-hover-opacity:1}:host(.button-outline){--border-radius:14px;--border-width:1px;--border-style:solid;--background-activated:var(--ion-color-primary, #0054e9);--background-focused:var(--ion-color-primary, #0054e9);--background-hover:transparent;--background-focused-opacity:.1;--color-activated:var(--ion-color-primary-contrast, #fff)}:host(.button-clear){--background-activated:transparent;--background-activated-opacity:0;--background-focused:var(--ion-color-primary, #0054e9);--background-hover:transparent;--background-focused-opacity:.1;font-size:min(1.0625rem, 51px);font-weight:normal}:host(.in-buttons){font-size:clamp(17px, 1.0625rem, 21.08px);font-weight:400}:host(.button-large){--border-radius:16px;--padding-top:17px;--padding-start:1em;--padding-end:1em;--padding-bottom:17px;min-height:3.1em;font-size:min(1.25rem, 60px)}:host(.button-small){--border-radius:6px;--padding-top:4px;--padding-start:0.9em;--padding-end:0.9em;--padding-bottom:4px;min-height:2.1em;font-size:min(0.8125rem, 39px)}:host(.button-round){--border-radius:999px;--padding-top:0;--padding-start:26px;--padding-end:26px;--padding-bottom:0}:host(.button-strong){font-weight:600}:host(.button-has-icon-only){--padding-top:0;--padding-bottom:var(--padding-top);--padding-end:var(--padding-top);--padding-start:var(--padding-end);min-width:clamp(30px, 2.125em, 60px);min-height:clamp(30px, 2.125em, 60px)}::slotted(ion-icon[slot=icon-only]){font-size:clamp(15.12px, 1.125em, 43.02px)}:host(.button-small.button-has-icon-only){min-width:clamp(23px, 2.16em, 54px);min-height:clamp(23px, 2.16em, 54px)}:host(.button-small) ::slotted(ion-icon[slot=icon-only]){font-size:clamp(12.1394px, 1.308125em, 40.1856px)}:host(.button-large.button-has-icon-only){min-width:clamp(46px, 2.5em, 78px);min-height:clamp(46px, 2.5em, 78px)}:host(.button-large) ::slotted(ion-icon[slot=icon-only]){font-size:clamp(15.12px, 0.9em, 43.056px)}:host(.button-outline.ion-focused.ion-color) .button-native,:host(.button-clear.ion-focused.ion-color) .button-native{color:var(--ion-color-base)}:host(.button-outline.ion-focused.ion-color) .button-native::after,:host(.button-clear.ion-focused.ion-color) .button-native::after{background:var(--ion-color-base)}:host(.button-solid.ion-color.ion-focused) .button-native::after{background:var(--ion-color-shade)}@media (any-hover: hover){:host(.button-clear:not(.ion-activated):hover),:host(.button-outline:not(.ion-activated):hover){opacity:0.6}:host(.button-clear.ion-color:hover) .button-native,:host(.button-outline.ion-color:hover) .button-native{color:var(--ion-color-base)}:host(.button-clear.ion-color:hover) .button-native::after,:host(.button-outline.ion-color:hover) .button-native::after{background:transparent}:host(.button-solid.ion-color:hover) .button-native::after{background:var(--ion-color-tint)}:host(:hover.button-solid.in-toolbar:not(.ion-color):not(.in-toolbar-color):not(.ion-activated)) .button-native::after{background:#fff;opacity:0.1}}:host(.button-clear.ion-activated){opacity:0.4}:host(.button-outline.ion-activated.ion-color) .button-native{color:var(--ion-color-contrast)}:host(.button-outline.ion-activated.ion-color) .button-native::after{background:var(--ion-color-base)}:host(.button-solid.ion-color.ion-activated) .button-native::after{background:var(--ion-color-shade)}:host(.button-outline.ion-activated.in-toolbar:not(.ion-color):not(.in-toolbar-color)) .button-native{background:var(--ion-toolbar-color, var(--color));color:var(--ion-toolbar-background, var(--background), var(--ion-color-primary-contrast, #fff))}',md:':host{--overflow:hidden;--ripple-color:currentColor;--border-width:initial;--border-color:initial;--border-style:initial;--color-activated:var(--color);--color-focused:var(--color);--color-hover:var(--color);--box-shadow:none;display:inline-block;width:auto;color:var(--color);font-family:var(--ion-font-family, inherit);text-align:center;text-decoration:none;white-space:normal;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;vertical-align:top;vertical-align:-webkit-baseline-middle;-webkit-font-kerning:none;font-kerning:none}:host(.button-disabled){cursor:default;opacity:0.5;pointer-events:none}:host(.button-solid){--background:var(--ion-color-primary, #0054e9);--color:var(--ion-color-primary-contrast, #fff)}:host(.button-outline){--border-color:var(--ion-color-primary, #0054e9);--background:transparent;--color:var(--ion-color-primary, #0054e9)}:host(.button-clear){--border-width:0;--background:transparent;--color:var(--ion-color-primary, #0054e9)}:host(.button-block){display:block}:host(.button-block) .button-native{margin-left:0;margin-right:0;width:100%;clear:both;contain:content}:host(.button-block) .button-native::after{clear:both}:host(.button-full){display:block}:host(.button-full) .button-native{margin-left:0;margin-right:0;width:100%;contain:content}:host(.button-full:not(.button-round)) .button-native{border-radius:0;border-right-width:0;border-left-width:0}.button-native{border-radius:var(--border-radius);-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;margin-left:0;margin-right:0;margin-top:0;margin-bottom:0;-webkit-padding-start:var(--padding-start);padding-inline-start:var(--padding-start);-webkit-padding-end:var(--padding-end);padding-inline-end:var(--padding-end);padding-top:var(--padding-top);padding-bottom:var(--padding-bottom);font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;letter-spacing:inherit;text-decoration:inherit;text-indent:inherit;text-overflow:inherit;text-transform:inherit;text-align:inherit;white-space:inherit;color:inherit;display:-ms-flexbox;display:flex;position:relative;-ms-flex-align:center;align-items:center;width:100%;height:100%;min-height:inherit;-webkit-transition:var(--transition);transition:var(--transition);border-width:var(--border-width);border-style:var(--border-style);border-color:var(--border-color);outline:none;background:var(--background);line-height:1;-webkit-box-shadow:var(--box-shadow);box-shadow:var(--box-shadow);contain:layout style;cursor:pointer;opacity:var(--opacity);overflow:var(--overflow);z-index:0;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-appearance:none;-moz-appearance:none;appearance:none}.button-native::-moz-focus-inner{border:0}.button-inner{display:-ms-flexbox;display:flex;position:relative;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-negative:0;flex-shrink:0;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;width:100%;height:100%;z-index:1}::slotted([slot=start]),::slotted([slot=end]){-ms-flex-negative:0;flex-shrink:0}::slotted(ion-icon){font-size:1.35em;pointer-events:none}::slotted(ion-icon[slot=start]){-webkit-margin-start:-0.3em;margin-inline-start:-0.3em;-webkit-margin-end:0.3em;margin-inline-end:0.3em;margin-top:0;margin-bottom:0}::slotted(ion-icon[slot=end]){-webkit-margin-start:0.3em;margin-inline-start:0.3em;-webkit-margin-end:-0.2em;margin-inline-end:-0.2em;margin-top:0;margin-bottom:0}ion-ripple-effect{color:var(--ripple-color)}.button-native::after{left:0;right:0;top:0;bottom:0;position:absolute;content:"";opacity:0}:host(.ion-focused){color:var(--color-focused)}:host(.ion-focused) .button-native::after{background:var(--background-focused);opacity:var(--background-focused-opacity)}@media (any-hover: hover){:host(:hover){color:var(--color-hover)}:host(:hover) .button-native::after{background:var(--background-hover);opacity:var(--background-hover-opacity)}}:host(.ion-activated){color:var(--color-activated)}:host(.ion-activated) .button-native::after{background:var(--background-activated);opacity:var(--background-activated-opacity)}:host(.button-solid.ion-color) .button-native{background:var(--ion-color-base);color:var(--ion-color-contrast)}:host(.button-outline.ion-color) .button-native{border-color:var(--ion-color-base);background:transparent;color:var(--ion-color-base)}:host(.button-clear.ion-color) .button-native{background:transparent;color:var(--ion-color-base)}:host(.in-toolbar:not(.ion-color):not(.in-toolbar-color)) .button-native{color:var(--ion-toolbar-color, var(--color))}:host(.button-outline.in-toolbar:not(.ion-color):not(.in-toolbar-color)) .button-native{border-color:var(--ion-toolbar-color, var(--color, var(--border-color)))}:host(.button-solid.in-toolbar:not(.ion-color):not(.in-toolbar-color)) .button-native{background:var(--ion-toolbar-color, var(--background));color:var(--ion-toolbar-background, var(--color))}:host{--border-radius:4px;--padding-top:8px;--padding-bottom:8px;--padding-start:1.1em;--padding-end:1.1em;--transition:box-shadow 280ms cubic-bezier(.4, 0, .2, 1),\n                background-color 15ms linear,\n                color 15ms linear;-webkit-margin-start:2px;margin-inline-start:2px;-webkit-margin-end:2px;margin-inline-end:2px;margin-top:4px;margin-bottom:4px;min-height:36px;font-size:0.875rem;font-weight:500;letter-spacing:0.06em;text-transform:uppercase}:host(.button-solid){--background-activated:transparent;--background-hover:var(--ion-color-primary-contrast, #fff);--background-focused:var(--ion-color-primary-contrast, #fff);--background-activated-opacity:0;--background-focused-opacity:.24;--background-hover-opacity:.08;--box-shadow:0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12)}:host(.button-solid.ion-activated){--box-shadow:0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12)}:host(.button-outline){--border-width:2px;--border-style:solid;--box-shadow:none;--background-activated:transparent;--background-focused:var(--ion-color-primary, #0054e9);--background-hover:var(--ion-color-primary, #0054e9);--background-activated-opacity:0;--background-focused-opacity:.12;--background-hover-opacity:.04}:host(.button-outline.ion-activated.ion-color) .button-native{background:transparent}:host(.button-clear){--background-activated:transparent;--background-focused:var(--ion-color-primary, #0054e9);--background-hover:var(--ion-color-primary, #0054e9);--background-activated-opacity:0;--background-focused-opacity:.12;--background-hover-opacity:.04}:host(.button-round){--border-radius:999px;--padding-top:0;--padding-start:26px;--padding-end:26px;--padding-bottom:0}:host(.button-large){--padding-top:14px;--padding-start:1em;--padding-end:1em;--padding-bottom:14px;min-height:2.8em;font-size:1.25rem}:host(.button-small){--padding-top:4px;--padding-start:0.9em;--padding-end:0.9em;--padding-bottom:4px;min-height:2.1em;font-size:0.8125rem}:host(.button-strong){font-weight:bold}:host(.button-has-icon-only){--padding-top:0;--padding-bottom:var(--padding-top);--padding-end:var(--padding-top);--padding-start:var(--padding-end);min-width:clamp(30px, 2.86em, 60px);min-height:clamp(30px, 2.86em, 60px)}::slotted(ion-icon[slot=icon-only]){font-size:clamp(15.104px, 1.6em, 43.008px)}:host(.button-small.button-has-icon-only){min-width:clamp(23px, 2.16em, 54px);min-height:clamp(23px, 2.16em, 54px)}:host(.button-small) ::slotted(ion-icon[slot=icon-only]){font-size:clamp(13.002px, 1.23125em, 40.385px)}:host(.button-large.button-has-icon-only){min-width:clamp(46px, 2.5em, 78px);min-height:clamp(46px, 2.5em, 78px)}:host(.button-large) ::slotted(ion-icon[slot=icon-only]){font-size:clamp(15.008px, 1.4em, 43.008px)}:host(.button-solid.ion-color.ion-focused) .button-native::after{background:var(--ion-color-contrast)}:host(.button-clear.ion-color.ion-focused) .button-native::after,:host(.button-outline.ion-color.ion-focused) .button-native::after{background:var(--ion-color-base)}@media (any-hover: hover){:host(.button-solid.ion-color:hover) .button-native::after{background:var(--ion-color-contrast)}:host(.button-clear.ion-color:hover) .button-native::after,:host(.button-outline.ion-color:hover) .button-native::after{background:var(--ion-color-base)}}:host(.button-outline.ion-activated.in-toolbar:not(.ion-color):not(.in-toolbar-color)) .button-native{background:var(--ion-toolbar-background, var(--color));color:var(--ion-toolbar-color, var(--background), var(--ion-color-primary-contrast, #fff))}'};const E=o=>{if(1===o.nodeType){if("script"===o.nodeName.toLowerCase())return!1;for(let t=0;t<o.attributes.length;t++){const n=o.attributes[t].name;if(d(n)&&0===n.toLowerCase().indexOf("on"))return!1}for(let t=0;t<o.childNodes.length;t++)if(!E(o.childNodes[t]))return!1}return!0},b=new Map,L=new Map;let z;const M=class{constructor(o){(0,i.r)(this,o),this.iconName=null,this.inheritedAttributes={},this.didLoadIcon=!1,this.svgContent=void 0,this.isVisible=!1,this.mode=X(),this.color=void 0,this.ios=void 0,this.md=void 0,this.flipRtl=void 0,this.name=void 0,this.src=void 0,this.icon=void 0,this.size=void 0,this.lazy=!1,this.sanitize=!0}componentWillLoad(){this.inheritedAttributes=((o,t=[])=>{const n={};return t.forEach(e=>{o.hasAttribute(e)&&(null!==o.getAttribute(e)&&(n[e]=o.getAttribute(e)),o.removeAttribute(e))}),n})(this.el,["aria-label"])}connectedCallback(){this.waitUntilVisible(this.el,"50px",()=>{this.isVisible=!0,this.loadIcon()})}componentDidLoad(){this.didLoadIcon||this.loadIcon()}disconnectedCallback(){this.io&&(this.io.disconnect(),this.io=void 0)}waitUntilVisible(o,t,n){if(this.lazy&&typeof window<"u"&&window.IntersectionObserver){const e=this.io=new window.IntersectionObserver(r=>{r[0].isIntersecting&&(e.disconnect(),this.io=void 0,n())},{rootMargin:t});e.observe(o)}else n()}loadIcon(){if(this.isVisible){const o=(o=>{let t=h(o.src);return t||(t=l(o.name,o.icon,o.mode,o.ios,o.md),t?((o,t)=>{const n=(()=>{if(typeof window>"u")return new Map;if(!f){const o=window;o.Ionicons=o.Ionicons||{},f=o.Ionicons.map=o.Ionicons.map||new Map}return f})().get(o);if(n)return n;try{return(0,i.k)(`svg/${o}.svg`)}catch{console.warn(`[Ionicons Warning]: Could not load icon with name "${o}". Ensure that the icon is registered using addIcons or that the icon SVG data is passed directly to the icon component.`,t)}})(t,o):o.icon&&(t=h(o.icon),t||(t=h(o.icon[o.mode]),t))?t:null)})(this);o&&(b.has(o)?this.svgContent=b.get(o):((o,t)=>{let n=L.get(o);if(!n){if(!(typeof fetch<"u"&&typeof document<"u"))return b.set(o,""),Promise.resolve();if((o=>o.startsWith("data:image/svg+xml"))(o)&&(o=>-1!==o.indexOf(";utf8,"))(o)){z||(z=new DOMParser);const r=z.parseFromString(o,"text/html").querySelector("svg");return r&&b.set(o,r.outerHTML),Promise.resolve()}n=fetch(o).then(e=>{if(e.ok)return e.text().then(r=>{r&&!1!==t&&(r=(o=>{const t=document.createElement("div");t.innerHTML=o;for(let e=t.childNodes.length-1;e>=0;e--)"svg"!==t.childNodes[e].nodeName.toLowerCase()&&t.removeChild(t.childNodes[e]);const n=t.firstElementChild;if(n&&"svg"===n.nodeName.toLowerCase()){const e=n.getAttribute("class")||"";if(n.setAttribute("class",(e+" s-ion-icon").trim()),E(n))return t.innerHTML}return""})(r)),b.set(o,r||"")});b.set(o,"")}),L.set(o,n)}return n})(o,this.sanitize).then(()=>this.svgContent=b.get(o)),this.didLoadIcon=!0)}this.iconName=l(this.name,this.icon,this.mode,this.ios,this.md)}render(){const{flipRtl:o,iconName:t,inheritedAttributes:n,el:e}=this,r=this.mode||"md",k=!!t&&(t.includes("arrow")||t.includes("chevron"))&&!1!==o,g=o||k;return(0,i.h)(i.f,Object.assign({role:"img",class:Object.assign(Object.assign({[r]:!0},K(this.color)),{[`icon-${this.size}`]:!!this.size,"flip-rtl":g,"icon-rtl":g&&S(e)})},n),(0,i.h)("div",this.svgContent?{class:"icon-inner",innerHTML:this.svgContent}:{class:"icon-inner"}))}static get assetsDirs(){return["svg"]}get el(){return(0,i.i)(this)}static get watchers(){return{name:["loadIcon"],src:["loadIcon"],icon:["loadIcon"],ios:["loadIcon"],md:["loadIcon"]}}},X=()=>typeof document<"u"&&document.documentElement.getAttribute("mode")||"md",K=o=>o?{"ion-color":!0,[`ion-color-${o}`]:!0}:null;M.style=":host{display:inline-block;width:1em;height:1em;contain:strict;fill:currentColor;-webkit-box-sizing:content-box !important;box-sizing:content-box !important}:host .ionicon{stroke:currentColor}.ionicon-fill-none{fill:none}.ionicon-stroke-width{stroke-width:32px;stroke-width:var(--ionicon-stroke-width, 32px)}.icon-inner,.ionicon,svg{display:block;height:100%;width:100%}@supports (background: -webkit-named-image(i)){:host(.icon-rtl) .icon-inner{-webkit-transform:scaleX(-1);transform:scaleX(-1)}}@supports not selector(:dir(rtl)) and selector(:host-context([dir='rtl'])){:host(.icon-rtl) .icon-inner{-webkit-transform:scaleX(-1);transform:scaleX(-1)}}:host(.flip-rtl):host-context([dir='rtl']) .icon-inner{-webkit-transform:scaleX(-1);transform:scaleX(-1)}@supports selector(:dir(rtl)){:host(.flip-rtl:dir(rtl)) .icon-inner{-webkit-transform:scaleX(-1);transform:scaleX(-1)}:host(.flip-rtl:dir(ltr)) .icon-inner{-webkit-transform:scaleX(1);transform:scaleX(1)}}:host(.icon-small){font-size:1.125rem !important}:host(.icon-large){font-size:2rem !important}:host(.ion-color){color:var(--ion-color-base) !important}:host(.ion-color-primary){--ion-color-base:var(--ion-color-primary, #3880ff)}:host(.ion-color-secondary){--ion-color-base:var(--ion-color-secondary, #0cd1e8)}:host(.ion-color-tertiary){--ion-color-base:var(--ion-color-tertiary, #f4a942)}:host(.ion-color-success){--ion-color-base:var(--ion-color-success, #10dc60)}:host(.ion-color-warning){--ion-color-base:var(--ion-color-warning, #ffce00)}:host(.ion-color-danger){--ion-color-base:var(--ion-color-danger, #f14141)}:host(.ion-color-light){--ion-color-base:var(--ion-color-light, #f4f5f8)}:host(.ion-color-medium){--ion-color-base:var(--ion-color-medium, #989aa2)}:host(.ion-color-dark){--ion-color-base:var(--ion-color-dark, #222428)}"},333:(F,v,c)=>{c.d(v,{c:()=>p,g:()=>w,h:()=>x,o:()=>C});var i=c(467);const x=(a,s)=>null!==s.closest(a),p=(a,s)=>"string"==typeof a&&a.length>0?Object.assign({"ion-color":!0,[`ion-color-${a}`]:!0},s):s,w=a=>{const s={};return(a=>void 0!==a?(Array.isArray(a)?a:a.split(" ")).filter(l=>null!=l).map(l=>l.trim()).filter(l=>""!==l):[])(a).forEach(l=>s[l]=!0),s},f=/^[a-z][a-z0-9+\-.]*:/,C=function(){var a=(0,i.A)(function*(s,l,h,m){if(null!=s&&"#"!==s[0]&&!f.test(s)){const d=document.querySelector("ion-router");if(d)return null!=l&&l.preventDefault(),d.push(s,h,m)}return!1});return function(l,h,m,d){return a.apply(this,arguments)}}()}}]);