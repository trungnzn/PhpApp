<?php
/*
//Upload a blank cookie.txt to the same directory as this file with a CHMOD/Permission to 777
function login($url,$data){
    $fp = fopen("cookie.txt", "w");
    fclose($fp);
    $login = curl_init();
    curl_setopt($login, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($login, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 40000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $url);
    curl_setopt($login, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($login, CURLOPT_POST, TRUE);
    curl_setopt($login, CURLOPT_POSTFIELDS, $data);
    ob_start();
    return curl_exec ($login);
    ob_end_clean();
    curl_close ($login);
    unset($login);    
}                  
 
function grab_page($site){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_TIMEOUT, 40);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($ch, CURLOPT_URL, $site);
    ob_start();
    return curl_exec ($ch);
    ob_end_clean();
    curl_close ($ch);
}
 
function post_data($site,$data){
    $datapost = curl_init();
        $headers = array("Expect:");
    curl_setopt($datapost, CURLOPT_URL, $site);
        curl_setopt($datapost, CURLOPT_TIMEOUT, 40000);
    curl_setopt($datapost, CURLOPT_HEADER, TRUE);
        curl_setopt($datapost, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($datapost, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($datapost, CURLOPT_POST, TRUE);
    curl_setopt($datapost, CURLOPT_POSTFIELDS, $data);
        curl_setopt($datapost, CURLOPT_COOKIEFILE, "cookie.txt");
    ob_start();
    return curl_exec ($datapost);
    ob_end_clean();
    curl_close ($datapost);
    unset($datapost);    
}
*/
?>

<?php
/*echo login("http://nongson.gov.vn/Default.aspx?tabid=747&ctl=login&SkinSrc=%5BG%5DSkins/LoginHSCV13/page&ContainerSrc=%5BG%5DContainers/qonongson/NoBorder&language=en-US", '
-----------------------------14939287095233
Content-Disposition: form-data; name="__EVENTARGUMENT"


-----------------------------14939287095233
Content-Disposition: form-data; name="__VIEWSTATE"

/wEPDwULLTE4NzMxNDE4MjYPZBYGZg8WAh4EVGV4dAV5PCFET0NUWVBFIGh0bWwgUFVCTElDICItLy9XM0MvL0RURCBYSFRNTCAxLjAgVHJhbnNpdGlvbmFsLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL1RSL3hodG1sMS9EVEQveGh0bWwxLXRyYW5zaXRpb25hbC5kdGQiPmQCAQ9kFg4CBA8WAh4HVmlzaWJsZWhkAgUPFgIeB2NvbnRlbnQFH1FvZmZpY2UgVUJORCBodXnhu4duIE7DtG5nIFPGoW5kAgYPFgIfAgUfUW9mZmljZSBVQk5EIGh1eeG7h24gTsO0bmcgU8ahbmQCBw8WAh8CBRVDb3B5cmlnaHQgMjAxNCBieSBRVElkAggPFgQfAmQfAWhkAgkPFgIfAgUfUW9mZmljZSBVQk5EIGh1eeG7h24gTsO0bmcgU8ahbmQCDA8WAh8CBQ1JTkRFWCwgRk9MTE9XZAICD2QWAgIBD2QWBmYPZBYCZg8WAh8BaBYEAgEPZBYIAgMPEGRkFgBkAgcPFgIfAWhkAgkPFgIfAWhkAgsPZBYCZg8PFgYeCEltYWdlVXJsBRQvaW1hZ2VzL2NvbGxhcHNlLmdpZh4NQWx0ZXJuYXRlVGV4dAUITWluaW1pemUeB1Rvb2xUaXAFCE1pbmltaXplFgoeB3VzZXJjdHIFCVVzYWJpbGl0eR4HdXNlcmtleQUVQ29udHJvbFBhbmVsVmlzaWJsZTMxHgdvbmNsaWNrBUxpZiAoX19kbm5fU2VjdGlvbk1heE1pbih0aGlzLCAgJ1JpYmJvbkJhci5hc2N4X1JCX1JpYmJvbkJhcicpKSByZXR1cm4gZmFsc2U7HghtYXhfaWNvbgUSL2ltYWdlcy9leHBhbmQuZ2lmHghtaW5faWNvbgUUL2ltYWdlcy9jb2xsYXBzZS5naWZkAgMPZBYEAgEPFCsAAhQrAAIPFgQeBFNraW4FB0RlZmF1bHQeE0VuYWJsZUVtYmVkZGVkU2tpbnNoZBAWBGYCAQICAgMWBBQrAAJkZBQrAAJkZBQrAAIPFgIfAWhkZBQrAAIPFgIfAWhkZA8WBGZmZmYWAQVuVGVsZXJpay5XZWIuVUkuUmFkVGFiLCBUZWxlcmlrLldlYi5VSSwgVmVyc2lvbj0yMDExLjEuNTE5LjM1LCBDdWx0dXJlPW5ldXRyYWwsIFB1YmxpY0tleVRva2VuPTEyMWZhZTc4MTY1YmEzZDRkFgQCAg8PFgIfAWhkZAIDDw8WAh8BaGRkAgMPFCsAAmQVBAhQYWdlSG9tZQtQYWdlQ3VycmVudAhQYWdlU2l0ZQ5QYWdlSG9zdFN5c3RlbRYEAgIPDxYCHwFoZGQCAw8PFgIfAWhkZAIFD2QWAmYPZBYCZg9kFgICAQ9kFgoCAQ8PFgIfAWhkZAIDD2QWAgIBDw9kFgIeBWNsYXNzBQdDb250ZW50FgICAQ8PFgIeBlBhZ2VOb2ZkFghmDw8WAh8BZ2QWBgIDDw8WAh8BZ2QWAmYPFgIeCW9ua2V5ZG93bgVscmV0dXJuIF9fZG5uX0tleURvd24oJzEzJywgJ2phdmFzY3JpcHQ6X19kb1Bvc3RCYWNrKCUyN2RubiRjdHIkTG9naW4kTG9naW5fRE5OJGNtZExvZ2luJTI3LCUyNyUyNyknLCBldmVudCk7FgJmD2QWDAIBD2QWAmYPFgIeA2ZvcgUjZG5uX2N0cl9Mb2dpbl9Mb2dpbl9ETk5fdHh0VXNlcm5hbWVkAgUPZBYCZg8WAh8QBSNkbm5fY3RyX0xvZ2luX0xvZ2luX0ROTl90eHRQYXNzd29yZGQCBw8PZBYCHgV2YWx1ZWVkAgkPZBYCZg9kFgJmD2QWAmYPFgIfEAUnZG5uX2N0cl9Mb2dpbl9Mb2dpbl9ETk5fdHh0VmVyaWZpY2F0aW9uZAINDxYCHwFoFgJmD2QWAmYPZBYCZg8WAh8QBSJkbm5fY3RyX0xvZ2luX0xvZ2luX0ROTl9jdGxDYXB0Y2hhZAIPDxYCHwFoFgJmD2QWAmYPFCsAA2QFBjdFc0NKNGRkAgUPZBYCZg8WAh8BaGQCCQ9kFgJmD2QWAmYPDxYCHwBlZGQCAg9kFgoCBQ9kFgJmDxYCHxAFFWRubl9jdHJfTG9naW5fbGJsVHlwZWQCCQ9kFgJmDxYCHxAFFmRubl9jdHJfTG9naW5fbGJsVG9rZW5kAhEPZBYCZg8WAh8QBRlkbm5fY3RyX0xvZ2luX3R4dFVzZXJuYW1lZAIVDxYCHwFoFgRmD2QWAmYPZBYCZg8WAh8QBRhkbm5fY3RyX0xvZ2luX2N0bENhcHRjaGFkAgEPZBYCZg8UKwADZAUGN0VzQ0o0ZGQCFw9kFgJmDxYCHxAFGWRubl9jdHJfTG9naW5fdHh0UGFzc3dvcmRkAgQPZBYCAgUPZBYCAgIPZBYEAgEPZBYEZg9kFgJmD2QWAmYPZBYCZg8WAh8QBR9kbm5fY3RyX0xvZ2luX1VzZXJfY2hrQXV0aG9yaXplZAIBD2QWAmYPZBYCZg9kFgJmDxYCHxAFHGRubl9jdHJfTG9naW5fVXNlcl9jaGtOb3RpZnlkAgMPZBYIAgIPZBYCZg9kFgJmD2QWAmYPFgIfEAUcZG5uX2N0cl9Mb2dpbl9Vc2VyX2Noa1JhbmRvbWQCAw9kFgJmD2QWAmYPZBYCZg8WAh8QBR5kbm5fY3RyX0xvZ2luX1VzZXJfdHh0UGFzc3dvcmRkAgQPZBYCZg9kFgJmD2QWAmYPFgIfEAUdZG5uX2N0cl9Mb2dpbl9Vc2VyX3R4dENvbmZpcm1kAgYPZBYCZg9kFgJmD2QWAmYPFgIfEAUcZG5uX2N0cl9Mb2dpbl9Vc2VyX3R4dEFuc3dlcmQCBg8PZBYCHw8FcnJldHVybiBfX2Rubl9LZXlEb3duKCcxMycsICdqYXZhc2NyaXB0Ol9fZG9Qb3N0QmFjayglMjdkbm4kY3RyJExvZ2luJFBhc3N3b3JkJGNtZFVwZGF0ZSRjdGwwMCUyNywlMjclMjcpJywgZXZlbnQpOxYCAgEPZBYKAgMPZBYCZg8WAh8QBSVkbm5fY3RyX0xvZ2luX1Bhc3N3b3JkX2xibExhc3RDaGFuZ2VkZAIHD2QWAmYPFgIfEAUhZG5uX2N0cl9Mb2dpbl9QYXNzd29yZF9sYmxFeHBpcmVzZAILD2QWAgIBD2QWBgIDD2QWAmYPZBYCZg9kFgJmDxYCHxAFJWRubl9jdHJfTG9naW5fUGFzc3dvcmRfdHh0T2xkUGFzc3dvcmRkAgQPZBYCZg9kFgJmD2QWAmYPFgIfEAUlZG5uX2N0cl9Mb2dpbl9QYXNzd29yZF90eHROZXdQYXNzd29yZGQCBQ9kFgJmD2QWAmYPZBYCZg8WAh8QBSRkbm5fY3RyX0xvZ2luX1Bhc3N3b3JkX3R4dE5ld0NvbmZpcm1kAg0PZBYCAgMPZBYEAgIPZBYCZg9kFgJmD2QWAmYPFgIfEAUiZG5uX2N0cl9Mb2dpbl9QYXNzd29yZF9sYmxRdWVzdGlvbmQCAw9kFgJmD2QWAmYPZBYCZg8WAh8QBSBkbm5fY3RyX0xvZ2luX1Bhc3N3b3JkX3R4dEFuc3dlcmQCDw9kFgICAw9kFgQCAg9kFgJmD2QWAmYPZBYCZg8WAh8QBSRkbm5fY3RyX0xvZ2luX1Bhc3N3b3JkX3R4dFFBUGFzc3dvcmRkAgQPZBYCZg9kFgJmD2QWAmYPFgIfEAUkZG5uX2N0cl9Mb2dpbl9QYXNzd29yZF90eHRFZGl0QW5zd2VyZAIFD2QWAmYPDxYCHwFoZGQCBw9kFgJmDw8WAh8BaGRkAgkPZBYCZg8PFgIfAWhkZAILDxQrAAIUKwADZGRkZGRkgDMed7xVOvQSQUKx71arb928+48=
-----------------------------14939287095233
Content-Disposition: form-data; name="__VIEWSTATEGENERATOR"

CA0B0334
-----------------------------14939287095233
Content-Disposition: form-data; name="dnn$ctr$Login$Login_DNN$txtUsername"

nhattrung
-----------------------------14939287095233
Content-Disposition: form-data; name="dnn$ctr$Login$Login_DNN$txtPassword"

12qwaszx@
-----------------------------14939287095233
Content-Disposition: form-data; name="dnn$ctr$Login$Login_DNN$cmdLogin"

Login
-----------------------------14939287095233
Content-Disposition: form-data; name="ScrollTop"


-----------------------------14939287095233
Content-Disposition: form-data; name="__dnnVariable"

{"dshReset_imgIcon:exp":"-1","dshQuestionAnswer_imgIcon:exp":"-1","__scdoff":"1","__dnn_pageload":"__dnn_SetInitialFocus(\u0027dnn_ctr_Login_Login_DNN_txtUsername\u0027);"}
-----------------------------14939287095233--
');
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>AutoSuggest script</title>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://github.com/twitter/typeahead.js/blob/master/src/typeahead/typeahead.js"></script>
    <script>
        $(document).ready(function() {
            $('input.city').typeahead({
                name: 'city',
                remote: 'city.php?query=%QUERY'

            });

        })
    </script>
</head>
<body>
<form>
	<fieldset>
		<legend>Try it yourself</legend>
			Enter your name:
			<input type="text" name="city" placeholder="Please Enter City or Zip code"></input>
	</fieldset>
</form>
</body>

</html> 
