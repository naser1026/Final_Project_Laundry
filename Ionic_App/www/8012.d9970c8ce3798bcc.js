"use strict";(self.webpackChunkapp=self.webpackChunkapp||[]).push([[8012],{8012:(v,g,r)=>{r.r(g),r.d(g,{RincianpesananPageModule:()=>F});var d=r(177),h=r(4341),s=r(1075),l=r(8986),u=r(467),n=r(4438),f=r(1950),b=r(9891);const P=()=>["/tabs/pesan"];function x(e,c){if(1&e&&(n.j41(0,"ion-card",26)(1,"ion-card-content")(2,"div",27)(3,"div",28)(4,"p",29),n.EFF(5),n.k0s(),n.j41(6,"p",30),n.EFF(7),n.k0s(),n.j41(8,"p",31),n.EFF(9),n.nI1(10,"currencyRp"),n.k0s()(),n.j41(11,"div",32)(12,"p",33),n.EFF(13),n.j41(14,"span",29),n.EFF(15),n.k0s()(),n.j41(16,"p",34),n.EFF(17),n.nI1(18,"currencyRp"),n.k0s()()()()()),2&e){const t=c.$implicit;n.R7$(5),n.Lme(" ",t.duration.name," - ",t.package_type," "),n.R7$(2),n.JRh(t.name),n.R7$(2),n.JRh(n.bMT(10,7,t.price)),n.R7$(4),n.SpI(" ",t.count," "),n.R7$(2),n.SpI(" ",t.package_type," "),n.R7$(2),n.JRh(n.bMT(18,9,t.price))}}function M(e,c){if(1&e){const t=n.RV6();n.j41(0,"ion-card-content")(1,"h3"),n.EFF(2),n.k0s(),n.j41(3,"div",10),n.nrm(4,"img",11),n.j41(5,"div",12)(6,"h2"),n.EFF(7),n.k0s(),n.j41(8,"h4",13),n.EFF(9,"No. Handphone"),n.k0s(),n.j41(10,"h4",14),n.EFF(11),n.k0s()(),n.j41(12,"div",15),n.bIt("click",function(){n.eBV(t);const a=n.XpG();return n.Njj(a.openWhatsApp(a.orderDetails.customer.phone_number))}),n.nrm(13,"ion-icon",16),n.k0s()(),n.DNE(14,x,19,11,"ion-card",17),n.j41(15,"ion-card",18)(16,"ion-card-content")(17,"div",19)(18,"div",20),n.EFF(19,"Dibuat Oleh"),n.k0s(),n.j41(20,"div",21),n.EFF(21,"Banaspati"),n.k0s()(),n.j41(22,"div",19)(23,"div",20),n.EFF(24,"Status"),n.k0s(),n.j41(25,"div",21),n.EFF(26),n.k0s()(),n.j41(27,"div",19)(28,"div",20),n.EFF(29,"Catatan"),n.k0s(),n.j41(30,"div",21),n.EFF(31),n.k0s()(),n.j41(32,"div",19)(33,"div",20),n.EFF(34,"Parfum"),n.k0s(),n.j41(35,"div",21),n.EFF(36),n.k0s()(),n.j41(37,"div",19)(38,"div",20),n.EFF(39,"Status Pembayaran"),n.k0s(),n.j41(40,"div",21),n.EFF(41),n.k0s()(),n.j41(42,"div",22)(43,"div",20),n.EFF(44,"Total Layanan"),n.k0s(),n.j41(45,"div",21),n.EFF(46),n.nI1(47,"currencyRp"),n.k0s()(),n.j41(48,"div",19)(49,"div",20),n.EFF(50,"Diskon"),n.k0s(),n.j41(51,"div",21),n.EFF(52),n.k0s()(),n.j41(53,"div",19)(54,"div",20),n.EFF(55,"Total"),n.k0s(),n.j41(56,"div",21),n.EFF(57),n.nI1(58,"currencyRp"),n.k0s()()()(),n.j41(59,"ion-button",23),n.EFF(60," Pesanan Telah Siap "),n.k0s(),n.j41(61,"ion-button",24),n.bIt("click",function(){n.eBV(t);const a=n.XpG();return n.Njj(a.presentPaymentTypeAlert())}),n.EFF(62," Ubah Status Pembayaran "),n.k0s(),n.j41(63,"ion-button",25),n.EFF(64," Batalkan Pesanan "),n.k0s()()}if(2&e){const t=n.XpG();n.R7$(2),n.JRh(t.orderDetails.invoice),n.R7$(5),n.JRh(t.orderDetails.customer.name),n.R7$(4),n.JRh(t.orderDetails.customer.phone_number),n.R7$(3),n.Y8G("ngForOf",t.orderDetails.packages),n.R7$(12),n.JRh(t.orderDetails.order_status),n.R7$(5),n.JRh(t.orderDetails.information),n.R7$(5),n.JRh(t.orderDetails.parfum),n.R7$(5),n.JRh(t.orderDetails.payment_status),n.R7$(5),n.SpI(" ",n.bMT(47,11,t.orderDetails.total_service)," "),n.R7$(6),n.SpI("- Rp ",t.orderDetails.discount,""),n.R7$(5),n.SpI(" ",n.bMT(58,13,t.orderDetails.total_price)," ")}}let m=(()=>{var e;class c{constructor(o,a,i,p){this.route=o,this.api=a,this.alertController=i,this.router=p,this.DataOrder=[]}ngOnInit(){this.route.params.subscribe(o=>{this.api.GetOrderDetail(o.id).subscribe(i=>{this.orderDetails=i.data.orders})})}presentAlert(o,a){var i=this;return(0,u.A)(function*(){yield(yield i.alertController.create({header:o,message:a,buttons:["OK"]})).present()})()}openWhatsApp(o){const i=encodeURIComponent("Hallo Selamat datang di KiwiFresh ini adalah uji coba 085774418236.");window.open(`https://wa.me/${o}?text=${i}`,"_blank")}presentPaymentTypeAlert(){var o=this;return(0,u.A)(function*(){const a=o.orderDetails.id_customer;yield(yield o.alertController.create({header:"Pilih Metode Pembayaran",inputs:[{name:"Tunai",type:"radio",label:"Tunai",value:"Tunai",checked:!0},{name:"NonTunai",type:"radio",label:"Non Tunai",value:"NonTunai"}],buttons:[{text:"Cancel",role:"cancel",handler:()=>{console.log("Cancel clicked")}},{text:"OK",handler:p=>{o.updatePaymentType(a,p)}}]})).present()})()}updatePaymentType(o,a){this.api.UpdateStatusPayment(o).subscribe(i=>{console.log("Update Payment Type Success ==> ",i),this.presentAlert("Berhasil","Status pembayaran berhasil diperbarui")},i=>{console.error("Gagal update payment type ===> ",i),this.presentAlert("Gagal","Gagal memperbarui status pembayaran")})}}return(e=c).\u0275fac=function(o){return new(o||e)(n.rXU(l.nX),n.rXU(f.F),n.rXU(s.hG),n.rXU(l.Ix))},e.\u0275cmp=n.VBU({type:e,selectors:[["app-rincianpesanan"]],decls:13,vars:4,consts:[[3,"fullscreen"],[1,"overlay"],[1,"card"],[1,"list-container"],[1,"toolbar-content"],["name","arrow-back-outline","size","large",1,"ikon",3,"routerLink"],[1,"toolbar-title"],[1,"spacer"],[1,"horizontal-lines"],[4,"ngIf"],[1,"container1"],["src","../../../assets/image/person.jpg","alt","Person Image",1,"small-left-img"],[1,"text"],[1,"p2"],[1,"p3"],[1,"whatsapp-icon",3,"click"],["name","logo-whatsapp"],["class","in-card",4,"ngFor","ngForOf"],[1,"custom-card3"],[1,"info-row"],[1,"label"],[1,"value"],[1,"info-row2"],["expand","block",1,"button-pesanan"],["expand","block",1,"button-ubah",3,"click"],["expand","block",1,"button-batal"],[1,"in-card"],[1,"card-content"],[1,"left-section"],[1,"small-text"],[1,"bold-text"],[1,"small-text2"],[1,"right-section"],[1,"bold-text","quantity"],[1,"small-text3"]],template:function(o,a){1&o&&(n.j41(0,"ion-content",0)(1,"div",1)(2,"ion-card",2)(3,"div",3)(4,"ion-card-header")(5,"ion-toolbar")(6,"div",4),n.nrm(7,"ion-icon",5),n.j41(8,"h1",6),n.EFF(9,"RINCIAN PESANAN"),n.k0s(),n.nrm(10,"div",7),n.k0s()(),n.nrm(11,"div",8),n.k0s(),n.DNE(12,M,65,15,"ion-card-content",9),n.k0s()()()()),2&o&&(n.Y8G("fullscreen",!0),n.R7$(7),n.Y8G("routerLink",n.lJ4(3,P)),n.R7$(5),n.Y8G("ngIf",a.orderDetails))},dependencies:[d.Sq,d.bT,s.Jm,s.b_,s.I9,s.ME,s.W9,s.iq,s.ai,s.N7,l.Wk,b.G],styles:['.ion-input[_ngcontent-%COMP%]{--highlight-height: 2px}.custom-input[_ngcontent-%COMP%]{--border-color: #ccc;--border-width: 1px;--border-radius: 8px;--padding-start: 16px}.container[_ngcontent-%COMP%]{display:flex;justify-content:center;height:auto;margin-top:10px}.pading-bottom[_ngcontent-%COMP%]{padding-bottom:3%}.padding-space[_ngcontent-%COMP%]{margin:3%}.element[_ngcontent-%COMP%]{background-color:#00ff2f}.font-color[_ngcontent-%COMP%]{color:#d3d3d3}.text-center-line[_ngcontent-%COMP%]{display:flex;align-items:center;text-align:center;width:100%}.text-center-line[_ngcontent-%COMP%]:before, .text-center-line[_ngcontent-%COMP%]:after{content:"";flex:1;border-bottom:1px solid #b5a8a8}.text-center-line[_ngcontent-%COMP%]:not(:empty):before{margin-right:.25em}.text-center-line[_ngcontent-%COMP%]:not(:empty):after{margin-left:.25em}.body[_ngcontent-%COMP%]{font-family:bubblegun,sans-serif}.logo[_ngcontent-%COMP%]{height:150px;width:150px;display:flex;justify-content:center;align-items:center}.card[_ngcontent-%COMP%]{margin-top:50px;box-shadow:0 4px 8px #0000001a;border-top-left-radius:50px;border-top-right-radius:50px;max-width:max;height:100%}ion-segment-button[_ngcontent-%COMP%]{font-size:14px;font-weight:550}ion-button[_ngcontent-%COMP%]{font-size:14px;font-weight:550;margin-top:10px}.alert[_ngcontent-%COMP%]{margin-right:5px}p[_ngcontent-%COMP%]{cursor:pointer}.ikon[_ngcontent-%COMP%]{margin-right:20px}.search-bar-container[_ngcontent-%COMP%]{display:flex;align-items:center;margin-top:-15px;margin-bottom:10px;font-size:small;box-shadow:none;justify-content:center}ion-searchbar.custom-searchbar[_ngcontent-%COMP%]{--background: #cccccca8;--border-radius: 20px;--box-shadow: none;--border: 1px solid #cccccc78}ion-button.button-sc[_ngcontent-%COMP%]{--border-width: 30px}.horizontal-lines[_ngcontent-%COMP%]{border-top:1.5px solid #dcdcdc;margin-bottom:-10px}.list-container[_ngcontent-%COMP%]{height:calc(100vh - 50px);overflow-y:auto}ion-list[_ngcontent-%COMP%]{height:100%;overflow:auto}h1[_ngcontent-%COMP%]{font-size:24px;font-weight:600}.notdata[_ngcontent-%COMP%]{display:flex;justify-content:center;align-items:center;text-align:center;flex-direction:column;margin-top:25%}.toolbar-content[_ngcontent-%COMP%]{display:flex;align-items:center;justify-content:space-between;width:100%;position:relative}.ikon[_ngcontent-%COMP%]{font-size:24px;position:absolute;left:0}.toolbar-title[_ngcontent-%COMP%]{position:absolute;left:50%;transform:translate(-50%);font-size:21px;margin:0;font-weight:900}.spacer[_ngcontent-%COMP%]{flex:1}ion-item[_ngcontent-%COMP%]{display:flex;align-items:center;padding:3px}ion-item[_ngcontent-%COMP%]   img[_ngcontent-%COMP%]{width:50px;border-radius:11px}ion-item[_ngcontent-%COMP%]   h3[_ngcontent-%COMP%]{font-size:1.03em;font-weight:900}ion-item[_ngcontent-%COMP%]   p[_ngcontent-%COMP%]{font-size:.8em}ion-item[_ngcontent-%COMP%]   h2[_ngcontent-%COMP%]{font-size:.9em;font-weight:600}ion-item[_ngcontent-%COMP%]   ion-button[_ngcontent-%COMP%]{font-size:13px}.in-card[_ngcontent-%COMP%]{--color: black;box-shadow:none;background-color:#e6e6e6;border-radius:10px}.small-left-img[_ngcontent-%COMP%]{margin-top:2px;height:50px;width:auto;float:left;border-radius:25%}.p2[_ngcontent-%COMP%]{font-size:60%;color:#4d4d4d}.p3[_ngcontent-%COMP%]{font-size:80%;color:#1e1e1e}.card-content[_ngcontent-%COMP%]{display:flex;justify-content:space-between;align-items:center}.bold-text[_ngcontent-%COMP%]{font-weight:700;margin:0}.small-text[_ngcontent-%COMP%], .small-text2[_ngcontent-%COMP%]{font-style:italic;font-size:13px;color:#757575;margin:0}.small-text3[_ngcontent-%COMP%]{font-style:normal;font-size:13px;color:#757575;margin:0}.quantity[_ngcontent-%COMP%]{font-size:1.2em}.left-section[_ngcontent-%COMP%]{text-align:left}.right-section[_ngcontent-%COMP%]{text-align:right}.custom-card3[_ngcontent-%COMP%]{background-color:#f7f7f7;border-radius:10px;padding:10px;margin-top:40px;box-shadow:none;outline-color:#000;outline:auto}.info-row[_ngcontent-%COMP%]{display:flex;justify-content:space-between;align-items:center;padding:10px 0;border-bottom:1px solid #757575}.info-row2[_ngcontent-%COMP%]{display:flex;justify-content:space-between;align-items:center;padding:10px 0}.info-row[_ngcontent-%COMP%]:last-child{border-bottom:none}.label[_ngcontent-%COMP%]{font-size:14px;color:#757575}.value[_ngcontent-%COMP%]{font-size:14px;font-weight:700;color:#000}.button-pesanan[_ngcontent-%COMP%]{--background: #2dd55b}.button-ubah[_ngcontent-%COMP%]{--background: rgb(111, 223, 111)}.button-batal[_ngcontent-%COMP%]{--background: rgb(165, 171, 165)}.container1[_ngcontent-%COMP%]{display:flex;align-items:center}.small-left-img[_ngcontent-%COMP%]{width:50px;height:50px}.text[_ngcontent-%COMP%]{padding-left:10px;flex-grow:1}.text[_ngcontent-%COMP%]   h2[_ngcontent-%COMP%], .text[_ngcontent-%COMP%]   h4[_ngcontent-%COMP%]{margin:0}.whatsapp-icon[_ngcontent-%COMP%]{font-size:45px;margin-left:10px}.whatsapp-icon[_ngcontent-%COMP%]   ion-icon[_ngcontent-%COMP%]{box-shadow:0 0 0 2px #000;border-radius:10px}h2[_ngcontent-%COMP%]{font-weight:800}']}),c})();const _=[{path:"",component:m}];let C=(()=>{var e;class c{}return(e=c).\u0275fac=function(o){return new(o||e)},e.\u0275mod=n.$C({type:e}),e.\u0275inj=n.G2t({imports:[l.iI.forChild(_),l.iI]}),c})();var O=r(1224);const y=[{path:"",component:m}];let F=(()=>{var e;class c{}return(e=c).\u0275fac=function(o){return new(o||e)},e.\u0275mod=n.$C({type:e}),e.\u0275inj=n.G2t({imports:[d.MD,h.YN,s.bv,C,O.S,l.iI.forChild(y)]}),c})()}}]);