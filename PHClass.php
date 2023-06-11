<?php
class PHClass {
    public function topup($Username, $Password, $Email, $Code){
      $Encode = base64_encode($Email. ":" . $Username);
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://ph-std.onrender.com/api/phtopup/?Username=$Username&Password=$Password&Encode=$Encode&Code=$Code",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
      ));
      
      $response = curl_exec($curl);
      
      curl_close($curl);
      return $response;
    }
}