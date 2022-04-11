<?php

namespace App\Http;


class SystemUtils{

    public static function uploadFile( $imageFile,$destination,$filename=""): string
    {
        if (!is_dir($destination)) {
            mkdir($destination);
        }

        if ($imageFile && $imageFile->getPathName()) {
            $image = explode('.', $imageFile->getClientOriginalName());
            $imageExtension = end($image);

            if(!empty($filename))
            {
                if($filename!=="default.png")
                unlink($destination.'/' . $filename);
            }

            $imageName =  uniqid(). "." . $imageExtension;
            $imagePath =  $destination.'/' . $imageName;

            move_uploaded_file($imageFile->getPathName(), $imagePath);

            return $imageName;
        }

        return null;
    }


}
?>
