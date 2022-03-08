<script type="text/javascript">
    function populate(pw, mp) {
        var pw = document.getElementById(pw);
        var mp = document.getElementById(mp);
        mp.innerHTML = "";
        //<!-- depends on what province the user picks, their barangay will also show -->
        if (pw.value == "Bukidnon Field Office") {
            var optionArray = ["Municipality|<option value=''>Choose Municipality</option>", "Baungon|<option value='Baungon'>Baungon</option>", "Cabanglasan|<option value='Cabanglasan'>Cabanglasan</option>", "Damulog|<option value='Damulog'>Damulog</option>", "Dangcagan|<option value='Dangcagan'>Dangcagan</option>", "Don Carlos|<option value='Don Carlos'>Don Carlos</option>", "Impasugong|<option value='Impasugong'>Impasugong</option>", "Kadingilan|<option value='Kadingilan'>Kadingilan</option>", "Kalilangan|<option value='Kalilangan'>Kalilangan</option>", "Kibawe|<option value='Kibawe'>Kibawe</option>",
                "Kitaotao|<option value='Kitaotao'>Kitaotao</option>", "Lantapan|<option value='Lantapan'>Lantapan</option>", "Libona|<option value='Libona'>Libona</option>", "Malaybalay|<option value='Malaybalay'>Malaybalay</option>", "Malitbog|Malitbog", "Manolo Fortich|<option value='Manolo Fortich'>Manolo Fortich</option>", "Maramag|<option value='Maramag'>Maramag</option>", "Pangantucan|<option value='Pangantucan'>Pangantucan</option>", "Quezon|<option value='Quezon'>Quezon</option>", "San Fernando|<option value='San Fernando'>San Fernando</option>",
                "Sumilao|<option value='Sumilao'>Sumilao</option>", "Talakag|<option value='Talakag'>Talakag</option>", "Valencia|<option value='Valencia'>Valencia</option>"
            ];
        } else if (pw.value == "Camiguin Field Office") {
            var optionArray = ["Municipality|<option value=''>Choose Municipality</option>", "Catarman|<option value='Catarman'>Catarman</option>", "Guinsibilan|<option value='Guinsibilan'>Guinsibilan</option>", "Mahinog|<option value='Mahinog'>Mahinog</option>", "Mambajao|<option value='Mambajao'>Mambajao</option>", "Sagay|<option value='Sagay'>Sagay</option>"];
        } else if (pw.value == "Lanao Del Norte Field Office") {
            var optionArray = ["Municipality|<option value=''>Choose Municipality</option>", "Bacolod|<option value='Bacolod'>Bacolod</option>", "Baloi|<option value='Baloi'>Baloi</option>", "Baroy|<option value='Baroy'>Baroy</option>", "Iligan|<option value='Iligan'>Iligan City</option>", "Kapatagan|<option value='Kapatagan'>Kapatagan</option>", "Kauswagan|<option value='Kauswagan'>Kauswagan</option>", "Kolambugan|<option value='Kolambugan'>Kolambugan</option>", "Lala|<option value='Lala'>Lala</option>", "Linamon|<option value='Linamon'>Linamon</option>",
                "Magsaysay|<option value='Magsaysay'>Magsaysay</option>", "Maigo|<option value='Maigo'>Maigo</option>", "Matungao|<option value='Matungao'>Matungao</option>", "Munai|<option value='Munai'>Munai</option>", "Nunungan|<option value='Nunungan'>Nunungan</option>", "Pantao-Ragat|<option value='Pantao-Ragat'>Pantao-Ragat </option>", "Pantar|<option value='Pantar'>Pantar </option>", "Poona-Piagapoo|<option value='Poona-Piagapoo'>Poona-Piagapoo </option>",
                "Salvador|<option value='Salvador'>Salvador </option>", "Sapad|<option value='Sapad'>Sapad </option>", "Sultan Naga Dimaporo|<option value='Sultan Naga Dimaporo'>Sultan Naga Dimaporo </option>", "Tagoloan|<option value='Tagoloan'>Tagoloan </option>", "Tangkal|<option value='Tangkal'>Tangkal </option>", "Tubod|<option value='Tubod'>Tubod </option>"
            ];
        } else if (pw.value == "Misamis Occidental Field Office") {
            var optionArray = ["Municipality|<option value=''>Choose Municipality</option>", "Aloran|<option value='Aloran'>Aloran </option>", "Baliangao|<option value='Baliangao'>Baliangao </option>", "Bonifacio|<option value='Bonifacio'>Bonifacio </option>", "Calamba|<option value='Calamba'>Calamba </option>", "Clarin|<option value='Clarin'>Clarin </option>", "Concepcion|<option value='Concepcion'>Concepcion </option>", "Don Victoriano Chiongbian|<option value='Don Victoriano Chiongbian'>Don Victoriano Chiongbian </option>",
                "Jimenez|<option value='Jimenez'>Jimenez </option>", "Oroquieta|<option value='Oroquieta City'>Oroquieta City </option>", "Ozamis|<option value='Ozamis City'>Ozamis City</option>", "Panaon|<option value='Panaon'>Panaon </option>", "Plaridel|<option value='Plaridel'>Plaridel </option>", "Sapang Dalaga|<option value='Sapang Dalaga'>Sapang Dalaga </option>", "Sinacaban|<option value='Sinacaban'>Sinacaban </option>", "Tangub|<option value='Tangub City'>Tangub City </option>", "Tudela|<option value='Tudela'>Tudela </option>"
            ];
        } else if (pw.value == "Misamis Oriental Field Office") {
            var optionArray = ["Municipality|<option value=''>Choose Municipality</option>", "Alubijid|<option value='Alubijid'>Alubijid </option>", "Balingasag|<option value='Balingasag'>Balingasag </option>", "Balingoan|<option value='Balingoan'>Balingoan </option>", "Binuangan|<option value='Binuangan'>Binuangan </option>", "Claveria|<option value='Claveria'>Claveria </option>", "El Salvador|<option value='El Salvador City'>El Salvador City </option>", "Gingoog|<option value='Gingoog City'>Gingoog City </option>", "Gitagum|<option value='Gitagum'>Gitagum </option>", "Initao|<option value='Initao'>Initao </option>", "Jasaan|<option value='Jasaan'>Jasaan </option>",
                "Kinoguitan|<option value='Kinoguitan'>Kinoguitan </option>", "Lagonglong|<option value='Lagonglong'>Lagonglong </option>", "Laguindingan|<option value='Laguindingan'>Laguindingan </option>", "Libertad|<option value='Libertad'>Libertad </option>Libertad", "Lugait|<option value='Lugait'>Lugait </option>", "Magsaysay|<option value='Magsaysay'>Magsaysay </option>", "Manticao|<option value='Manticao'>Manticao </option>",
                "Medina|<option value='Medina'>Medina </option>", "Naawan|<option value='Naawan'>Naawan </option>", "Opol|<option value='Opol'>Opol </option>", "Salay|<option value='Salay'>Salay </option>", "Sugbongcogon|<option value='Sugbongcogon'>Sugbongcogon </option>", "Tagoloan|<option value='Tagoloan'>Tagoloan </option>", "Talisayan|<option value='Talisayan'>Talisayan </option>", "Villanueva|<option value='Villanueva'>Villanueva </option>"
            ];
        } else if (pw.value == "Cagayan de Oro City Field Office") {
            var optionArray = ["Cagayan De Oro|<option value='Cagayan De Oro'>Cagayan De Oro</option>"];
        }
        for (var option in optionArray) {
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML = pair[1];
            mp.options.add(newOption);
        }
    }
</script>