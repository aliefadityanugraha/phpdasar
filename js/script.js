//ambil elemnets yg dibutuhkan

var kunci = document.getElementById('kunci');
var tombolcari = document.getElementById('cari');
var container = document.getElementById('container');

//tambah even when kunci ditlis

kunci.addEventListener('keyup',function(){
//object ajax
    var xhr = new XMLHttpRequest();

//cek kesiapan ajax
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
           
        }
    }
//koneksi + method get 
    xhr.open('GET' ,'ajax/siswa.php?kunci=' + kunci.value ,true);
    xhr.send();

});
console.log('test');