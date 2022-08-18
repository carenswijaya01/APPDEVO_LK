import './bootstrap';

var urlSource = {
    Username : "ValidationDefault01",
    NIM : "validationDefault02",
    Email : "validationDefault03",
    KTM : "validationDefaultKTM",
    OMB : "validvalidationDefaultOMB",
    LDKM : "validationDefaultLDKM",
    Submit : "submit-foorm",
    inputUsername : function (){
        return $(urlSource.Username).val();
    },
    inputNIM : function(){
        return $(urlSource.NIM).val();
    },
    inputEmail : function(){
        return $(urlSource.Email).val();
    },
    inputKTM : function(){
        return $(urlSource.KTM).val();
    },
    inputOMB : function(){
        return $(urlSource.OMB).val();
    },
    inputLDKM : function(){
        return $(urlSource.LDKM).val();
    }
};

function sumbitPrompt(){
    if(urlSource.inputUsername() == null){
        alert("Masukkan username terlebih dahulu");//bisa diganti prompt baru atau tampilkan tulisan merah di inputUsername
        return false; // false supaya pengkondisian lain tidak dijalankan (tidak mengulang alert prompt)
    }else if(urlSource.inputNIM() == null){
        alert("Masukkan NIM terlebih dahulu");//bisa diganti prompt baru atau tampilkan tulisan merah di inputNIM
        return false; // false supaya pengkondisian lain tidak dijalankan (tidak mengulang alert prompt)
    }else if(urlSource.inputEmail() == null) {
        alert("Masukkan email terlebih dahulu");//bisa diganti prompt baru atau tampilkan tulisan merah di inputEmail
        return false; // false supaya pengkondisian lain tidak dijalankan (tidak mengulang alert prompt)
    }else if(urlSource.inputKTM() == null){
        alert("Masukkan data KTM");//bisa diganti prompt baru atau tampilkan tulisan merah
        return false; // false supaya pengkondisian lain tidak dijalankan (tidak mengulang alert prompt)
    }else if(urlSource.inputOMB() == null){
        alert("masukan data OMB");//bisa diganti prompt baru atau tampilkan tulisan merah
        return false; // false supaya pengkondisian lain tidak dijalankan (tidak mengulang alert prompt)
    }else if(urlSource.inputLDKM() == null){
        alert("masukkan data LDKM");//bisa diganti prompt baru atau tampilkan tulisan merah
        return false; // false supaya pengkondisian lain tidak dijalankan (tidak mengulang alert prompt)
    }else{
        alert("Data berhasil ditambah");
        //push data input field ke database
    }
}