       <?php

            echo "2";
            use WindowsAzure\Common\ServicesBuilder;
            echo "3";
            use WindowsAzure\Blob\Models\CreateContainerOptions;
            echo "4";
            use WindowsAzure\Blob\Models\PublicAccessType;
            echo "5";
            use WindowsAzure\Common\ServiceException;
            echo "6";
            $connectionString = 'DefaultEndpointsProtocol=http;AccountName=misbounstashnew;AccountKey=o5uC6pxyUuLTbg4MOTunrzvqw0YzzcP90yyJuNjoue8PT2Rx8eIEZ/ZE1dnqMdsv1Ouvp35Qph5TjmCNiBya3A==';
            echo "7"; 
            $blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);
            echo "8";
            if ($blobRestProxy) {echo "success_blobRestProxy";}
            if (!$blobRestProxy) {echo "fail_blobRestProxy";}
            $createContainerOptions = new CreateContainerOptions(); 

            try 
            {
                // Create container.
                $blobRestProxy->createContainer("mycontainer", $createContainerOptions);
            }
            catch(ServiceException $e)
            {
                // Handle exception based on error codes and messages.
                // Error codes and messages are here: 
                // http://msdn.microsoft.com/en-us/library/windowsazure/dd179439.aspx
                $code = $e->getCode();
                $error_message = $e->getMessage();
                echo $code.": ".$error_message."<br />";
            }

        ?>
