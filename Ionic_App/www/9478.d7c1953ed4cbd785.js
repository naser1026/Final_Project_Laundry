"use strict";(self.webpackChunkapp=self.webpackChunkapp||[]).push([[9478],{9478:(v,m,s)=>{s.r(m),s.d(m,{UpdatepelangganPageModule:()=>y});var f=s(177),d=s(4341),r=s(1075),p=s(8986),b=s(467),n=s(4438),M=s(1950);const C=["ionInputEl"],P=()=>["/searchpelanggan"],u=()=>({standalone:!0});function h(o){return(new DOMParser).parseFromString(o,"text/html").body.textContent||""}const x=[{path:"",component:(()=>{var o;class g{onInput(e){const i=e.target.value.replace(/[^a-zA-Z0-9 ]+/g,"");this.ionInputEl.value=this.inputModel=i}constructor(e,t,i){this.api=e,this.alertController=t,this.router=i,this.searchQuery="",this.filteredDataCustomer=[],this.inputModel="",this.form={name:"",phone_number:"",created_by:""},this.id="";const l=this.router.getCurrentNavigation();if(null!=l&&l.extras.state){const a=l.extras.state.customer;console.log("Received Customer:",a),a&&(this.form.name=a.name,this.form.phone_number=a.phone_number,this.id=a.id)}}presentAlert(e,t,i=!1){var l=this;return(0,b.A)(function*(){yield(yield l.alertController.create({header:e,message:t,buttons:[{text:"OK",handler:()=>{i&&l.router.navigate(["/searchpelanggan"],{state:{refresh:!0}})}}]})).present()})()}doPutUpdateCustomer(){this.api.UpdateCustomer(this.id,this.form).subscribe(e=>{const t=JSON.parse(JSON.stringify(e));console.log(t.id),console.log("Success ==> "+JSON.stringify(e)),this.presentAlert("Berhasil","Pelanggan berhasil diedit",!0)},e=>{console.error("Gagal Update user ===> ",e.status),this.presentAlert("Gagal","Harap mengisi semua form terlebih dahulu")})}GetAllCustomer(){this.api.GetListCustomer().subscribe(e=>{this.DataCustomer=e.data.customers.map(t=>({...t,name:h(t.name),phone_number:h(t.phone_number)})),this.filteredDataCustomer=this.DataCustomer,console.log("Data Customer ===>"+JSON.stringify(this.DataCustomer))})}editCustomer(e){this.form.name=e.name,this.form.phone_number=e.phone_number,this.id=e.id,this.router.navigate(["/updatepelanggan"])}ngOnInit(){}}return(o=g).\u0275fac=function(e){return new(e||o)(n.rXU(M.F),n.rXU(r.hG),n.rXU(p.Ix))},o.\u0275cmp=n.VBU({type:o,selectors:[["app-updatepelanggan"]],viewQuery:function(e,t){if(1&e&&n.GBs(C,7),2&e){let i;n.mGM(i=n.lsd())&&(t.ionInputEl=i.first)}},decls:29,vars:12,consts:[["ionInputEl",""],[3,"fullscreen"],[1,"overlay"],[1,"card"],[1,"list-container"],[1,"toolbar-content"],["name","arrow-back-outline","size","large",1,"ikon",3,"routerLink"],[1,"toolbar-title"],[1,"spacer"],[1,"horizontal-line"],[1,"container"],["name","person-outline",1,"icon",2,"margin-right","2%"],["color","success","type","Text","label","Nama Pelanggan","label-placement","floating","fill","outline","shape","round","placeholder","Masukan Nama Pelanggan",1,"custom",3,"ngModelChange","ionInput","ngModel","ngModelOptions"],["name","call-outline",1,"icon",2,"margin-right","2%"],["color","success","label","No Telepon","type","number","label-placement","floating","fill","outline","shape","round","placeholder","Masukan No Telepon",3,"ngModelChange","ngModel","ngModelOptions"],["color","success","label","Created By","type","number","label-placement","floating","fill","outline","shape","round","placeholder","Masukan Di Buat Oleh Siapa?",3,"ngModelChange","ngModel","ngModelOptions"],["color","success","expand","block",3,"click"],[1,"padding-space"]],template:function(e,t){if(1&e){const i=n.RV6();n.j41(0,"ion-content",1)(1,"div",2)(2,"ion-card",3)(3,"div",4)(4,"ion-card-header")(5,"ion-toolbar")(6,"div",5),n.nrm(7,"ion-icon",6),n.j41(8,"h1",7),n.EFF(9,"EDIT PELANGGAN"),n.k0s(),n.nrm(10,"div",8),n.k0s()(),n.nrm(11,"div",9),n.j41(12,"ion-list")(13,"div",10),n.nrm(14,"ion-icon",11),n.j41(15,"ion-input",12,0),n.mxI("ngModelChange",function(a){return n.eBV(i),n.DH7(t.form.name,a)||(t.form.name=a),n.Njj(a)}),n.bIt("ionInput",function(a){return n.eBV(i),n.Njj(t.onInput(a))}),n.k0s()(),n.nrm(17,"br"),n.j41(18,"div",10),n.nrm(19,"ion-icon",13),n.j41(20,"ion-input",14),n.mxI("ngModelChange",function(a){return n.eBV(i),n.DH7(t.form.phone_number,a)||(t.form.phone_number=a),n.Njj(a)}),n.k0s()(),n.nrm(21,"br"),n.j41(22,"div",10),n.nrm(23,"ion-icon",13),n.j41(24,"ion-input",15),n.mxI("ngModelChange",function(a){return n.eBV(i),n.DH7(t.form.created_by,a)||(t.form.created_by=a),n.Njj(a)}),n.k0s()(),n.nrm(25,"br"),n.j41(26,"ion-button",16),n.bIt("click",function(){return n.eBV(i),n.Njj(t.doPutUpdateCustomer())}),n.EFF(27,"Edit Pelanggan"),n.k0s(),n.nrm(28,"div",17),n.k0s()()()()()()}2&e&&(n.Y8G("fullscreen",!0),n.R7$(7),n.Y8G("routerLink",n.lJ4(8,P)),n.R7$(8),n.R50("ngModel",t.form.name),n.Y8G("ngModelOptions",n.lJ4(9,u)),n.R7$(5),n.R50("ngModel",t.form.phone_number),n.Y8G("ngModelOptions",n.lJ4(10,u)),n.R7$(4),n.R50("ngModel",t.form.created_by),n.Y8G("ngModelOptions",n.lJ4(11,u)))},dependencies:[d.BC,d.vS,r.Jm,r.b_,r.ME,r.W9,r.iq,r.$w,r.nf,r.ai,r.su,r.Gw,r.N7,p.Wk],styles:['.ion-input[_ngcontent-%COMP%]{--highlight-height: 2px}.custom-input[_ngcontent-%COMP%]{--border-color: #ccc;--border-width: 1px;--border-radius: 8px;--padding-start: 16px}.container[_ngcontent-%COMP%]{display:flex;justify-content:center;height:auto}.pading-bottom[_ngcontent-%COMP%]{padding-bottom:3%}.padding-space[_ngcontent-%COMP%]{margin:3%}.element[_ngcontent-%COMP%]{background-color:#00ff2f}.font-color[_ngcontent-%COMP%]{color:#d3d3d3}.text-center-line[_ngcontent-%COMP%]{display:flex;align-items:center;text-align:center;width:100%}.text-center-line[_ngcontent-%COMP%]:before, .text-center-line[_ngcontent-%COMP%]:after{content:"";flex:1;border-bottom:1px solid #b5a8a8}.text-center-line[_ngcontent-%COMP%]:not(:empty):before{margin-right:.25em}.text-center-line[_ngcontent-%COMP%]:not(:empty):after{margin-left:.25em}.body[_ngcontent-%COMP%]{font-family:bubblegun,sans-serif}.logo[_ngcontent-%COMP%]{height:150px;width:150px;display:flex;justify-content:center;align-items:center}.card[_ngcontent-%COMP%]{margin-top:50px;box-shadow:0 4px 8px #0000001a;border-top-left-radius:50px;border-top-right-radius:50px;max-width:max;height:100%}ion-segment-button[_ngcontent-%COMP%]{font-size:14px;font-weight:550}ion-button[_ngcontent-%COMP%]{font-size:14px;font-weight:550;margin-top:10px}.alert[_ngcontent-%COMP%]{margin-right:5px}p[_ngcontent-%COMP%]{cursor:pointer}.ikon[_ngcontent-%COMP%]{margin-right:20px}.search-bar-container[_ngcontent-%COMP%]{display:flex;align-items:center;margin-top:-15px;margin-bottom:10px;font-size:small;box-shadow:none;justify-content:center}ion-searchbar.custom-searchbar[_ngcontent-%COMP%]{--background: #cccccca8;--border-radius: 20px;--box-shadow: none;--border: 1px solid #cccccc78}ion-button.button-sc[_ngcontent-%COMP%]{--border-width: 30px}.horizontal-lines[_ngcontent-%COMP%]{margin-top:0%;border-top:1px solid #dcdcdc;margin-bottom:-10px}.list-container[_ngcontent-%COMP%]{height:calc(100vh - 50px);overflow-y:auto}ion-list[_ngcontent-%COMP%]{height:100%;overflow:auto}h1[_ngcontent-%COMP%]{font-weight:800}.notdata[_ngcontent-%COMP%]{display:flex;justify-content:center;align-items:center;text-align:center;flex-direction:column;margin-top:25%}.toolbar-content[_ngcontent-%COMP%]{display:flex;align-items:center;justify-content:space-between;width:100%;position:relative}.ikon[_ngcontent-%COMP%]{font-size:24px;position:absolute;left:0}.toolbar-title[_ngcontent-%COMP%]{position:absolute;left:50%;transform:translate(-50%);font-size:1.1rem!important;margin:0}.spacer[_ngcontent-%COMP%]{flex:1}']}),g})()}];let O=(()=>{var o;class g{}return(o=g).\u0275fac=function(e){return new(e||o)},o.\u0275mod=n.$C({type:o}),o.\u0275inj=n.G2t({imports:[p.iI.forChild(x),p.iI]}),g})(),y=(()=>{var o;class g{}return(o=g).\u0275fac=function(e){return new(e||o)},o.\u0275mod=n.$C({type:o}),o.\u0275inj=n.G2t({imports:[f.MD,d.YN,r.bv,O]}),g})()}}]);