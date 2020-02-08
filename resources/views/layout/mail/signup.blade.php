<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=3DUTF-8" />
    <title>Sistem PKM UNY</title>
    <style>
        .myButton {
            -moz-box-shadow: 0px 4px 20px 0px #f0f7fa;
            -webkit-box-shadow: 0px 4px 20px 0px #f0f7fa;
            box-shadow: 0px 4px 20px 0px #f0f7fa;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #33bdef), color-stop(1, #019ad2));
            background: -moz-linear-gradient(top, #33bdef 5%, #019ad2 100%);
            background: -webkit-linear-gradient(top, #33bdef 5%, #019ad2 100%);
            background: -o-linear-gradient(top, #33bdef 5%, #019ad2 100%);
            background: -ms-linear-gradient(top, #33bdef 5%, #019ad2 100%);
            background: linear-gradient(to bottom, #33bdef 5%, #019ad2 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#33bdef', endColorstr='#019ad2', GradientType=0);
            background-color: #33bdef;
            -moz-border-radius: 42px;
            -webkit-border-radius: 42px;
            border-radius: 42px;
            border: 2px solid #057fd0;
            display: inline-block;
            cursor: pointer;
            color: #ffffff;
            font-family: Arial;
            font-size: 15px;
            font-weight: bold;
            padding: 10px 24px;
            text-decoration: none;
            text-shadow: 0px 3px 7px #5b6178;
        }

        .myButton:hover {
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #019ad2), color-stop(1, #33bdef));
            background: -moz-linear-gradient(top, #019ad2 5%, #33bdef 100%);
            background: -webkit-linear-gradient(top, #019ad2 5%, #33bdef 100%);
            background: -o-linear-gradient(top, #019ad2 5%, #33bdef 100%);
            background: -ms-linear-gradient(top, #019ad2 5%, #33bdef 100%);
            background: linear-gradient(to bottom, #019ad2 5%, #33bdef 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#019ad2', endColorstr='#33bdef', GradientType=0);
            background-color: #019ad2;
        }

        .myButton:active {
            position: relative;
            top: 1px;
        }
    </style>
</head>

<body style="background-color:#e5e5e5; margin:20px 0;">
    <br />
    <div style="margin:2%;">
        <div
            style="direction:ltr; text-align:left; font-family:'Open-sans','Arial',sans-serif; color:#444; background-color:white; padding:1.5em; border-radius:1em; box-shadow:1px -5px 8px 2px #bbb; max-width:58 0px; margin:2% auto 0 auto;">
            <table style3D="background:white;width:100%">
                <tr>
                    <td>
                        <center>
                            <div style="width:90px; height:54px; margin:10px auto; text-align: center">
                                <img src="https://crews.unytechtv.com/assets/images/logopkmhitam.png" alt="Logo PKM Center" width="200" />
                            </div>
                        </center>
                        <div style="width:90%; padding-bottom:10px; padding-left:15px">
                            <p>
                                <span
                                    style="font-family:'Open sans','Arial',sans-serif; font-weight:bold; font-size:medium; line-height:1.4em">
                                    Hallo, {{$nama}}
                                </span>
                            </p>
                            <p>
                                <span style="font-family:'Open sans','Arial',sans-serif; font-size:2.08em;">
                                    <br />
                                    Aktivasi akun sistem PKM
                                </span>
                                <br />
                            </p>
                        </div>
                        <div style="padding-left:15px">
                            <p style="size:small; line-height:1.4em;">
                                Sistem terbaru Program Kreativitas Mahasiswa UNY hanya bisa digunakan dengan aktivasi melalui email student dan untuk dapat menggunakan Sistem ini maka pastikan
                                perangkat telah <strong style="color:red">terkoneksi ke Jaringan UNY</strong> dan
                                mengklik tombol Aktifkan Akun yang terdapat dibawah ini :<br>

                            </p>
                            <p style="line-height:2em; margin-right:170px;">
                                <a href="{{$link}}" target="_blank"><button class="myButton">Aktifkan Akun / Login Akun</button></a>
                            </p>
                            <br>
                            <p style="color: red"><strong>Perhatian!!</strong></p>
                            <p><strong>Simpanlah Email ini</strong> untuk suatu saat anda gunakan untuk login ke Sistem PKM jika anda lupa password hingga ada pemberitahuan adanya perubahan sistem reset passsword pada Sistem PKM.</p>
                        </div>
                        <br/>
                        <br/>
                        <br>
                        <div style="clear:both; padding-left:13px; height:6.8em;">
                            <table style="width:100%; border-collapse:collapse; border:0">
                                <tr>
                                    <td
                                        style="align:left; font-family:'Open sans','Arial',sans-serif; vertical-align:bottom">
                                        <span style="font-size:small">Selamat berkarya untuk negeri,
                                            <br />
                                        </span>
                                        <span style="font-size:large; line-height:1">
                                            Tim PKM Center UNY
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div
            style="direction:ltr;color:#777; font-size:0.8em; border-radius:1em; padding:1em; margin:0 auto 4% auto; font-family:'Arial','Helvetica',sans-serif; text-align:center;">
            {{date("Y")}} - Tim Web Developer PKM Center UNY
            <div style="width:90px; height:54px; margin:10px auto;">
                <img src="https://crews.unytechtv.com/assets/images/logopkmhitam.png" alt="PKM Center" width="90" height="30"/>
            </div>

        </div>
    </div>
</body>

</html>