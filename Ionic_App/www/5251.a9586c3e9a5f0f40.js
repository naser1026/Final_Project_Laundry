"use strict";(self.webpackChunkapp=self.webpackChunkapp||[]).push([[5251],{5251:(w,u,s)=>{s.r(u),s.d(u,{PesananPageModule:()=>G});var d=s(177),g=s(4341),r=s(1075),m=s(8986),t=s(4438),f=s(1950),_=s(9891);const P=()=>["/pilihpelanggan"],p=n=>["/rincianpesanan",n];function b(n,o){if(1&n&&(t.j41(0,"ion-item",21)(1,"div",22)(2,"div",23)(3,"span",24),t.EFF(4),t.k0s(),t.j41(5,"span",25),t.EFF(6),t.k0s()(),t.j41(7,"div",26)(8,"ion-thumbnail",27),t.nrm(9,"img",28),t.k0s(),t.j41(10,"ion-label",29)(11,"h3",29),t.EFF(12),t.k0s()()()(),t.j41(13,"div",30)(14,"div")(15,"ion-badge",31),t.EFF(16),t.k0s(),t.j41(17,"div",32)(18,"h3"),t.EFF(19),t.nI1(20,"currencyRp"),t.k0s(),t.j41(21,"p"),t.EFF(22),t.k0s()()()()()),2&n){const e=o.$implicit;t.Y8G("routerLink",t.eq3(10,p,e.id)),t.R7$(4),t.JRh(e.invoice),t.R7$(2),t.JRh(e.duration_name),t.R7$(6),t.JRh(e.customer_name),t.R7$(4),t.JRh(e.order_status),t.R7$(3),t.JRh(t.bMT(20,8,e.total_price)),t.R7$(3),t.Lme("",e.payment_status," - ",e.payment_type,"")}}function C(n,o){if(1&n&&(t.j41(0,"ion-list",19),t.DNE(1,b,23,12,"ion-item",20),t.k0s()),2&n){const e=t.XpG(2);t.R7$(),t.Y8G("ngForOf",e.DataOrderAntrian)}}function O(n,o){1&n&&(t.j41(0,"div",33)(1,"h1"),t.EFF(2,"Belum Ada Data"),t.k0s(),t.j41(3,"p"),t.EFF(4,"Saat ini belum ada data yang dapat di tampilkan"),t.k0s()())}function x(n,o){if(1&n&&(t.j41(0,"ion-list"),t.DNE(1,C,2,1,"ion-list",17)(2,O,5,0,"div",18),t.k0s()),2&n){const e=t.XpG();t.R7$(),t.Y8G("ngIf",e.DataOrderAntrian&&e.DataOrderAntrian.length>0),t.R7$(),t.Y8G("ngIf",!e.DataOrderAntrian||0===e.DataOrderAntrian.length)}}function M(n,o){if(1&n&&(t.j41(0,"ion-item",21)(1,"div",22)(2,"div",23)(3,"span",24),t.EFF(4),t.k0s(),t.j41(5,"span",25),t.EFF(6),t.k0s()(),t.j41(7,"div",26)(8,"ion-thumbnail",27),t.nrm(9,"img",28),t.k0s(),t.j41(10,"ion-label",29)(11,"h3",29),t.EFF(12),t.k0s()()()(),t.j41(13,"div",30)(14,"div")(15,"ion-badge",31),t.EFF(16),t.k0s(),t.j41(17,"div",32)(18,"h3"),t.EFF(19),t.nI1(20,"currencyRp"),t.k0s(),t.j41(21,"p"),t.EFF(22),t.k0s()()()()()),2&n){const e=o.$implicit;t.Y8G("routerLink",t.eq3(10,p,e.id)),t.R7$(4),t.JRh(e.invoice),t.R7$(2),t.JRh(e.duration_name),t.R7$(6),t.JRh(e.customer_name),t.R7$(4),t.JRh(e.order_status),t.R7$(3),t.JRh(t.bMT(20,8,e.total_price)),t.R7$(3),t.Lme("",e.payment_status," - ",e.payment_type,"")}}function y(n,o){if(1&n&&(t.j41(0,"ion-list",19),t.DNE(1,M,23,12,"ion-item",20),t.k0s()),2&n){const e=t.XpG(2);t.R7$(),t.Y8G("ngForOf",e.DataOrderSiapAmbil)}}function D(n,o){1&n&&(t.j41(0,"div",33)(1,"h1"),t.EFF(2,"Belum Ada Data"),t.k0s(),t.j41(3,"p"),t.EFF(4,"Saat ini belum ada data yang dapat di tampilkan"),t.k0s()())}function v(n,o){if(1&n&&(t.j41(0,"ion-list"),t.DNE(1,y,2,1,"ion-list",17)(2,D,5,0,"div",18),t.k0s()),2&n){const e=t.XpG();t.R7$(),t.Y8G("ngIf",e.DataOrderSiapAmbil&&e.DataOrderSiapAmbil.length>0),t.R7$(),t.Y8G("ngIf",!e.DataOrderSiapAmbil||0===e.DataOrderSiapAmbil.length)}}function h(n){return(new DOMParser).parseFromString(n,"text/html").body.textContent||""}const F=[{path:"",component:(()=>{var n;class o{constructor(a){this.api=a,this.selectTabs="Antrian",this.searchQuery="",this.DataOrder=[],this.DataPaket=[],this.DataDurasi=[],this.DataOrderAntrian=[],this.DataOrderSiapAmbil=[],this.filteredDataCustomer=[]}GetOrder(){this.api.GetListOrder().subscribe(a=>{this.DataOrder=a.data.orders.map(i=>{const l=this.DataCustomer.find(c=>c.id===i.id_customer);return{...i,customer_name:l?l.name:"Unknown"}}),this.filterDataOrder(),console.log("Data Order ===>"+JSON.stringify(this.DataOrder))})}filterDataOrder(){const a=this.searchQuery.toLowerCase();this.DataOrderAntrian=this.DataOrder.filter(i=>"Antrian"===i.order_status&&(i.customer_name.toLowerCase().includes(a)||i.invoice.toLowerCase().includes(a))),this.DataOrderSiapAmbil=this.DataOrder.filter(i=>"Siap Ambil"===i.order_status&&(i.customer_name.toLowerCase().includes(a)||i.invoice.toLowerCase().includes(a)))}GetPaket(){this.api.GetListOrder().subscribe(a=>{this.DataPaket=a.data.packages,console.log("Data Paket ===>"+JSON.stringify(this.DataPaket))})}GetDuration(){this.api.GetListDuration().subscribe(a=>{this.DataDurasi=a.data.duration,console.log("Data Durasi ===>"+JSON.stringify(this.DataDurasi))})}GetAllCustomer(){this.api.GetListCustomer().subscribe(a=>{this.DataCustomer=a.data.customers.map(i=>({...i,name:h(i.name),phone_number:h(i.phone_number)})),this.filteredDataCustomer=this.DataCustomer,console.log("Data Customer ===>"+JSON.stringify(this.DataCustomer))})}filterCustomers(){const a=this.searchQuery.toLowerCase();this.filteredDataCustomer=this.DataCustomer.filter(i=>i.name.toLowerCase().includes(a)||i.phone_number.toLowerCase().includes(a))}ngOnInit(){this.GetPaket(),this.GetOrder(),this.GetAllCustomer()}}return(n=o).\u0275fac=function(a){return new(a||n)(t.rXU(f.F))},n.\u0275cmp=t.VBU({type:n,selectors:[["app-pesanan"]],decls:26,vars:7,consts:[[3,"fullscreen"],[1,"overlay"],[1,"card"],[1,"list-container"],[1,"container"],[1,"horizontal-line"],[1,"search-bar-container"],["placeholder","Cari Nama atau Nota",1,"custom-searchbar",3,"ngModelChange","ionInput","ngModel"],["size","large","color","success",1,"button-sc",3,"routerLink"],["name","add-outline"],[1,"horizontal-lines"],["color","success",3,"ngModelChange","ngModel"],["value","Antrian"],["value","Siap Ambil"],[1,"horizontal-line",2,"margin-top","0%"],[4,"ngIf"],[1,"horizontal-linea"],["lines","full",4,"ngIf"],["class","notdata",4,"ngIf"],["lines","full"],["class","list-item",3,"routerLink",4,"ngFor","ngForOf"],[1,"list-item",3,"routerLink"],[1,"item-content"],[1,"item-header"],[1,"nota"],[1,"type"],[1,"item-body"],["slot","start"],["alt","Customer","src","../../../assets/image/keranjang.jpg"],[1,"name-order"],[1,"item-footer"],["color","success"],[1,"price"],[1,"notdata"]],template:function(a,i){1&a&&(t.j41(0,"ion-content",0)(1,"div",1)(2,"ion-card",2)(3,"div",3)(4,"ion-card-header")(5,"div",4)(6,"h1"),t.EFF(7,"Pesanan"),t.k0s()(),t.nrm(8,"div",5),t.j41(9,"div",6)(10,"ion-searchbar",7),t.mxI("ngModelChange",function(c){return t.DH7(i.searchQuery,c)||(i.searchQuery=c),c}),t.bIt("ionInput",function(){return i.filterDataOrder()}),t.k0s(),t.j41(11,"ion-button",8),t.nrm(12,"ion-icon",9),t.k0s()(),t.nrm(13,"div",10),t.k0s(),t.j41(14,"ion-card-content")(15,"ion-segment",11),t.mxI("ngModelChange",function(c){return t.DH7(i.selectTabs,c)||(i.selectTabs=c),c}),t.j41(16,"ion-segment-button",12)(17,"ion-label"),t.EFF(18,"Antrian"),t.k0s()(),t.j41(19,"ion-segment-button",13)(20,"ion-label"),t.EFF(21,"Siap Ambil"),t.k0s()()(),t.nrm(22,"div",14),t.DNE(23,x,3,2,"ion-list",15)(24,v,3,2,"ion-list",15),t.k0s(),t.nrm(25,"div",16),t.k0s()()()()),2&a&&(t.Y8G("fullscreen",!0),t.R7$(10),t.R50("ngModel",i.searchQuery),t.R7$(),t.Y8G("routerLink",t.lJ4(6,P)),t.R7$(4),t.R50("ngModel",i.selectTabs),t.R7$(8),t.Y8G("ngIf","Antrian"==i.selectTabs),t.R7$(),t.Y8G("ngIf","Siap Ambil"==i.selectTabs))},dependencies:[d.Sq,d.bT,g.BC,g.vS,r.In,r.Jm,r.b_,r.I9,r.ME,r.W9,r.iq,r.uz,r.he,r.nf,r.S1,r.Gp,r.eP,r.Zx,r.Je,r.Gw,r.N7,m.Wk,_.G],styles:['.ion-input[_ngcontent-%COMP%]{--highlight-height: 2px}.custom-input[_ngcontent-%COMP%]{--border-color: #ccc;--border-width: 1px;--border-radius: 8px;--padding-start: 16px}.container[_ngcontent-%COMP%]{display:flex;justify-content:center;height:auto;margin-top:10px}.pading-bottom[_ngcontent-%COMP%]{padding-bottom:3%}.padding-space[_ngcontent-%COMP%]{margin:3%}.element[_ngcontent-%COMP%]{background-color:#00ff2f}.font-color[_ngcontent-%COMP%]{color:#d3d3d3}.text-center-line[_ngcontent-%COMP%]{display:flex;align-items:center;text-align:center;width:100%}.text-center-line[_ngcontent-%COMP%]:before, .text-center-line[_ngcontent-%COMP%]:after{content:"";flex:1;border-bottom:1px solid #b5a8a8}.text-center-line[_ngcontent-%COMP%]:not(:empty):before{margin-right:.25em}.text-center-line[_ngcontent-%COMP%]:not(:empty):after{margin-left:.25em}.body[_ngcontent-%COMP%]{font-family:bubblegun,sans-serif}.logo[_ngcontent-%COMP%]{height:150px;width:150px;display:flex;justify-content:center;align-items:center}.card[_ngcontent-%COMP%]{margin-top:50px;box-shadow:0 4px 8px #0000001a;border-top-left-radius:50px;border-top-right-radius:50px;max-width:max;height:100%}ion-segment-button[_ngcontent-%COMP%]{font-size:12px;font-weight:900}ion-button[_ngcontent-%COMP%]{font-size:14px;font-weight:550;margin-top:10px}.alert[_ngcontent-%COMP%]{margin-right:5px}p[_ngcontent-%COMP%]{cursor:pointer}.ikon[_ngcontent-%COMP%]{margin-right:20px}.search-bar-container[_ngcontent-%COMP%]{display:flex;align-items:center;margin-top:-15px;margin-bottom:10px;font-size:small;box-shadow:none;justify-content:center}ion-searchbar.custom-searchbar[_ngcontent-%COMP%]{--background: #cccccca8;--border-radius: 20px;--box-shadow: none;--border: 1px solid #cccccc78}ion-button.button-sc[_ngcontent-%COMP%]{--border-width: 30px}.horizontal-lines[_ngcontent-%COMP%]{margin-top:0%;border-top:1px solid #dcdcdc;margin-bottom:-10px}.horizontal-linea[_ngcontent-%COMP%]{margin-top:80%;border-top:1px solid #dcdcdc}.list-container[_ngcontent-%COMP%]{height:calc(100vh - 50px);overflow-y:auto}ion-list[_ngcontent-%COMP%]{height:100%;overflow:auto}h1[_ngcontent-%COMP%]{font-size:24px;font-weight:600}.notdata[_ngcontent-%COMP%]{display:flex;justify-content:center;align-items:center;text-align:center;flex-direction:column;margin-top:25%}.list-item[_ngcontent-%COMP%]{display:flex;flex-direction:column;margin-bottom:16px}.item-content[_ngcontent-%COMP%]{display:flex;flex-direction:column;width:95%}.item-header[_ngcontent-%COMP%]{display:flex;align-items:center;font-size:.9em;color:gray}.item-body[_ngcontent-%COMP%]{display:flex;align-items:center;margin-top:8px}ion-thumbnail[_ngcontent-%COMP%]{display:flex;justify-content:center;align-items:center;background-color:#f3f4f6;width:50px;height:50px;border-radius:50%;margin-right:16px}ion-thumbnail[_ngcontent-%COMP%]   img[_ngcontent-%COMP%]{border-radius:12%;width:100%;height:100%}.item-footer[_ngcontent-%COMP%]{display:flex;justify-content:flex-end;align-items:center;width:50%}.price[_ngcontent-%COMP%]{text-align:right}.price[_ngcontent-%COMP%]   h3[_ngcontent-%COMP%]{margin:0;font-weight:700}.price[_ngcontent-%COMP%]   p[_ngcontent-%COMP%]{margin:0;color:red;font-weight:900}ion-badge[_ngcontent-%COMP%]{margin-left:33px;margin-bottom:17px}.nota[_ngcontent-%COMP%]{font-size:13px;font-weight:900;color:#000;margin-right:8px}.type[_ngcontent-%COMP%]{font-size:13px;color:#000}.name-order[_ngcontent-%COMP%]{font-weight:700}']}),o})()}];let R=(()=>{var n;class o{}return(n=o).\u0275fac=function(a){return new(a||n)},n.\u0275mod=t.$C({type:n}),n.\u0275inj=t.G2t({imports:[m.iI.forChild(F),m.iI]}),o})();var j=s(1224);let G=(()=>{var n;class o{}return(n=o).\u0275fac=function(a){return new(a||n)},n.\u0275mod=t.$C({type:n}),n.\u0275inj=t.G2t({imports:[d.MD,g.YN,r.bv,R,j.S]}),o})()}}]);