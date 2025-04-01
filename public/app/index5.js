import{_ as u,c as r,b as e,f as t,w as i,i as a,g as b,o as c,d as v,h as n,a as p,z as g,A as h}from"./app.js";import{v as x,p as y,a as k}from"./filepond-plugin-image-preview.esm.js";const _={},w={class:"mb-4 pt-md-3","aria-label":"Breadcrumb"},N={class:"breadcrumb breadcrumb-light"},F={class:"breadcrumb-item"},j={class:"breadcrumb-item"};function E(m,s){const d=b("router-link");return c(),r("nav",w,[e("ol",N,[e("li",F,[t(d,{to:"/"},{default:i(()=>s[0]||(s[0]=[a("Home")])),_:1})]),e("li",j,[t(d,{to:"/car-finder-account-info"},{default:i(()=>s[1]||(s[1]=[a("Account")])),_:1})]),s[2]||(s[2]=e("li",{class:"breadcrumb-item active","aria-current":"page"},"Personal Info",-1))])])}const P=u(_,[["render",E]]),$={class:"row"},V={class:"col-lg-4 col-md-5 pe-xl-4 mb-5"},R={class:"card card-body card-light border-0 shadow-sm pb-1 me-lg-1"},S={class:"collapse d-md-block mt-3",id:"account-nav"},C={class:"card-nav"},B={class:"col-lg-8 col-md-7 mb-5"},I={class:"row pt-2"},M={class:"col-lg-3 col-md-12 col-sm-4 mb-4"},A=v({__name:"pcard",setup(m){const s=x(k,y);return(d,l)=>{const o=b("router-link");return c(),r("div",$,[e("aside",V,[e("div",R,[l[10]||(l[10]=n('<div class="d-flex d-md-block d-lg-flex align-items-start pt-lg-2 mb-4"><img class="rounded-circle" src="'+h+'" width="48" alt="Robert Fox"><div class="pt-md-2 pt-lg-0 ps-3 ps-md-0 ps-lg-3"><h2 class="fs-lg text-light mb-0">Robert Fox</h2><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span><ul class="list-unstyled fs-sm mt-3 mb-0"><li><a class="nav-link-light fw-normal" href="tel:3025550107"><i class="fi-phone opacity-60 me-2"></i>(302) 555-0107</a></li><li><a class="nav-link-light fw-normal" href="mailto:robert_fox@email.com"><i class="fi-mail opacity-60 me-2"></i>robert_fox@email.com</a></li></ul></div></div>',1)),t(o,{class:"btn btn-primary btn-lg w-100 mb-3",to:"/car-finder-sell-car"},{default:i(()=>l[1]||(l[1]=[e("i",{class:"fi-plus me-2"},null,-1),a("Sell car ")])),_:1}),l[11]||(l[11]=e("a",{class:"btn btn-outline-light d-block d-md-none w-100 mb-3",href:"#account-nav","data-bs-toggle":"collapse"},[e("i",{class:"fi-align-justify me-2"}),a("Menu")],-1)),e("div",S,[e("div",C,[t(o,{class:"card-nav-link active",to:"/car-finder-account-info"},{default:i(()=>l[2]||(l[2]=[e("i",{class:"fi-user me-2"},null,-1),a("Personal Info")])),_:1}),t(o,{class:"card-nav-link",to:"/car-finder-account-security"},{default:i(()=>l[3]||(l[3]=[e("i",{class:"fi-lock me-2"},null,-1),a("Password & Security")])),_:1}),t(o,{class:"card-nav-link",to:"/car-finder-account-cars"},{default:i(()=>l[4]||(l[4]=[e("i",{class:"fi-car me-2"},null,-1),a("My Cars ")])),_:1}),t(o,{class:"card-nav-link",to:"/car-finder-account-wishlist"},{default:i(()=>l[5]||(l[5]=[e("i",{class:"fi-heart me-2"},null,-1),a("Wishlist "),e("span",{class:"badge bg-faded-light ms-2"},"4",-1)])),_:1}),t(o,{class:"card-nav-link",to:"/car-finder-account-reviews"},{default:i(()=>l[6]||(l[6]=[e("i",{class:"fi-star me-2"},null,-1),a("Reviews ")])),_:1}),t(o,{class:"card-nav-link",to:"/car-finder-account-notifications"},{default:i(()=>l[7]||(l[7]=[e("i",{class:"fi-bell me-2"},null,-1),a("Notifications ")])),_:1}),t(o,{class:"card-nav-link",to:"/car-finder-help-center"},{default:i(()=>l[8]||(l[8]=[e("i",{class:"fi-help me-2"},null,-1),a("Help ")])),_:1}),t(o,{class:"card-nav-link",to:"/signin-dark"},{default:i(()=>l[9]||(l[9]=[e("i",{class:"fi-logout me-2"},null,-1),a("Sign Out ")])),_:1})])])])]),e("div",B,[l[14]||(l[14]=e("h1",{class:"h2 text-light"},"Personal Info",-1)),l[15]||(l[15]=e("div",{class:"text-light mb-2 pt-1"},"Your personal info is 50% completed",-1)),l[16]||(l[16]=e("div",{class:"progress progress-light mb-4",style:{height:".25rem"}},[e("div",{class:"progress-bar bg-warning",role:"progressbar",style:{width:"50%"},"aria-valuenow":"50","aria-valuemin":"0","aria-valuemax":"100"})],-1)),e("div",I,[l[13]||(l[13]=n('<div class="col-lg-9 col-md-12 col-sm-8 mb-2 mb-m-4"><div class="border border-light rounded-3 p-3 mb-4" id="personal-info"><div class="border-bottom border-light pb-3 mb-3"><div class="d-flex align-items-center justify-content-between"><div class="pe-2 opacity-70"><label class="form-label fw-bold text-light">Full name</label><div class="text-light" id="name-value">Robert Fox</div></div><div data-bs-toggle="tooltip" title="Edit"><a class="nav-link nav-link-light py-0" href="#name-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div></div><div class="collapse" id="name-collapse" data-bs-parent="#personal-info"><input class="form-control form-control-light mt-3" type="text" data-bs-binded-element="#name-value" data-bs-unset-value="Not specified" value="Robert Fox"></div></div><div class="border-bottom border-light pb-3 mb-3"><div class="d-flex align-items-center justify-content-between"><div class="pe-2 opacity-70"><label class="form-label fw-bold text-light">Gender</label><div class="text-light" id="gender-value">Not specified</div></div><div data-bs-toggle="tooltip" title="Edit"><a class="nav-link nav-link-light py-0" href="#gender-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div></div><div class="collapse" id="gender-collapse" data-bs-parent="#personal-info"><select class="form-select form-select-light mt-3" data-bs-binded-element="#gender-value"><option value="" disabled selected>Select your gender</option><option value="Male">Male</option><option value="Female">Female</option></select></div></div><div class="border-bottom border-light pb-3 mb-3"><div class="d-flex align-items-center justify-content-between"><div class="pe-2 opacity-70"><label class="form-label fw-bold text-light">Email</label><div class="text-light" id="email-value">robert_fox@email.com</div></div><div data-bs-toggle="tooltip" title="Edit"><a class="nav-link nav-link-light py-0" href="#email-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div></div><div class="collapse" id="email-collapse" data-bs-parent="#personal-info"><input class="form-control form-control-light mt-3" type="email" data-bs-binded-element="#email-value" data-bs-unset-value="Not specified" value="robert_fox@email.com"></div></div><div class="border-bottom border-light pb-3 mb-3"><div class="d-flex align-items-center justify-content-between"><div class="pe-2 opacity-70"><label class="form-label fw-bold text-light">Phone number</label><div class="text-light" id="phone-value">(302) 555-0107</div></div><div data-bs-toggle="tooltip" title="Edit"><a class="nav-link nav-link-light py-0" href="#phone-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div></div><div class="collapse" id="phone-collapse" data-bs-parent="#personal-info"><input class="form-control form-control-light mt-3" type="text" data-bs-binded-element="#phone-value" data-bs-unset-value="Not specified" value="(302) 555-0107"></div></div><div><div class="d-flex align-items-center justify-content-between"><div class="pe-2 opacity-70"><label class="form-label fw-bold text-light">Address</label><div class="text-light" id="address-value">Not specified</div></div><div data-bs-toggle="tooltip" title="Edit"><a class="nav-link nav-link-light py-0" href="#address-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div></div><div class="collapse" id="address-collapse" data-bs-parent="#personal-info"><input class="form-control form-control-light mt-3" type="text" data-bs-binded-element="#address-value" data-bs-unset-value="Not specified" placeholder="Enter address"></div></div></div></div>',1)),e("div",M,[t(p(s),{class:"file-uploader border-light bg-faded-light pt-5 pb-4",modelValue:p(s),"onUpdate:modelValue":l[0]||(l[0]=f=>g(s)?s.value=f:null),labelIdle:'<i class="d-inline-block fi-camera-plus fs-2 text-light text-muted mb-2"></i><br><span class="fw-bold text-light opacity-70">Change picture</span>',"accepted-file-types":"image/jpeg, image/png"},null,8,["modelValue"]),l[12]||(l[12]=e("div",{class:"pt-4 pb-2 py-lg-5"},[e("h6",{class:"text-light mb-2"},"Who can see my profile?"),e("p",{class:"fs-sm text-light opacity-70 mb-0"},"Your profile is private. No one else will see it untill a reservation is confirmed.")],-1))])]),l[17]||(l[17]=n('<div class="row"><div class="col-lg-9"><div class="d-flex align-items-center justify-content-between pb-1"><button class="btn btn-primary" type="button">Save changes</button><button class="btn btn-link btn-light btn-sm px-0" type="button"><i class="fi-trash me-2"></i>Delete account </button></div></div></div>',1))])])}}}),H={class:"container pt-5 pb-lg-4 mt-5 mb-sm-2"},z=v({__name:"index",setup(m){return(s,d)=>(c(),r("div",H,[t(P),t(A)]))}});export{z as default};
