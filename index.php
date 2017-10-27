<?php

#$requestSimple = '{"resource":"/","path":"/","httpMethod":"POST","headers":{"Accept":"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8","Accept-Encoding":"gzip, deflate, br","Accept-Language":"en-US,en;q=0.9","cache-control":"max-age=0","CloudFront-Forwarded-Proto":"https","CloudFront-Is-Desktop-Viewer":"true","CloudFront-Is-Mobile-Viewer":"false","CloudFront-Is-SmartTV-Viewer":"false","CloudFront-Is-Tablet-Viewer":"false","CloudFront-Viewer-Country":"IN","content-type":"application/x-www-form-urlencoded","Host":"dgr7r9s7n1.execute-api.us-east-1.amazonaws.com","origin":"http://apps.jsf2.com","Referer":"http://apps.jsf2.com/xhtml/post-form.html","upgrade-insecure-requests":"1","User-Agent":"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36","Via":"2.0 ea5d711fdce750991b725e09c07704b0.cloudfront.net (CloudFront)","X-Amz-Cf-Id":"dolsYje1td5knSsviiad4fWS-qyBhYnBI03gejWIVNuVsZSy7RV27Q==","X-Amzn-Trace-Id":"Root=1-59f333ea-6fd0d2f72df939f851d40b6e","X-Forwarded-For":"123.201.192.108, 54.182.242.6","X-Forwarded-Port":"443","X-Forwarded-Proto":"https"},"queryStringParameters":null,"pathParameters":null,"stageVariables":null,"requestContext":{"path":"/web","accountId":"322173628904","resourceId":"cze7z4qy4j","stage":"web","requestId":"60abe01e-bb1a-11e7-ac17-172fc039b733","identity":{"cognitoIdentityPoolId":null,"accountId":null,"cognitoIdentityId":null,"caller":null,"apiKey":"","sourceIp":"123.201.192.108","accessKey":null,"cognitoAuthenticationType":null,"cognitoAuthenticationProvider":null,"userArn":null,"userAgent":"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36","user":null},"resourcePath":"/","httpMethod":"POST","apiId":"dgr7r9s7n1"},"body":"firstName=J.+Random&lastName=Hacker","isBase64Encoded":false}';
#$requestMulti = json_decode('{"resource":"/{proxy+}","path":"/test-path","httpMethod":"POST","headers":{"Accept":"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8","Accept-Encoding":"gzip, deflate, br","Accept-Language":"en-US,en;q=0.9","cache-control":"max-age=0","CloudFront-Forwarded-Proto":"https","CloudFront-Is-Desktop-Viewer":"true","CloudFront-Is-Mobile-Viewer":"false","CloudFront-Is-SmartTV-Viewer":"false","CloudFront-Is-Tablet-Viewer":"false","CloudFront-Viewer-Country":"IN","content-type":"multipart/form-data; boundary=----WebKitFormBoundaryw81SYxwoqQXBQyKM","Host":"dgr7r9s7n1.execute-api.us-east-1.amazonaws.com","origin":"http://apps.jsf2.com","Referer":"http://apps.jsf2.com/xhtml/post-form.html","upgrade-insecure-requests":"1","User-Agent":"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36","Via":"2.0 ca1bd738396bf76d1ebc457307cd25f5.cloudfront.net (CloudFront)","X-Amz-Cf-Id":"pmQaOw2iXiDq5BoLKuN6EbHy5sPTGZYnJJljA1yhuvGSEY65HZPkKw==","X-Amzn-Trace-Id":"Root=1-59f33ab0-26f0132a6013e95672b29f4e","X-Forwarded-For":"123.201.192.108, 54.182.242.113","X-Forwarded-Port":"443","X-Forwarded-Proto":"https"},"queryStringParameters":null,"pathParameters":{"proxy":"test-path"},"stageVariables":null,"requestContext":{"path":"/web/test-path","accountId":"322173628904","resourceId":"qqnkg2","stage":"web","requestId":"6a09a752-bb1e-11e7-a61d-711080250519","identity":{"cognitoIdentityPoolId":null,"accountId":null,"cognitoIdentityId":null,"caller":null,"apiKey":"","sourceIp":"123.201.192.108","accessKey":null,"cognitoAuthenticationType":null,"cognitoAuthenticationProvider":null,"userArn":null,"userAgent":"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36","user":null},"resourcePath":"/{proxy+}","httpMethod":"POST","apiId":"dgr7r9s7n1"},"body":"------WebKitFormBoundaryw81SYxwoqQXBQyKM\r\nContent-Disposition: form-data; name=\"firstName\"; filename=\"autokey_0.90.4-0.dsc\"\r\nContent-Type: application/octet-stream\r\n\r\nFormat: 1.0\nSource: autokey\nBinary: autokey-common, autokey-qt, autokey-gtk\nArchitecture: all\nVersion: 0.90.4-0\nMaintainer: Chris Dekter <cdekter@gmail.com>\nHomepage: http://code.google.com/p/autokey/\nStandards-Version: 3.9.3\nBuild-Depends: python (>= 2.6), debhelper (>= 7), cdbs (>= 0.4.49)\nBuild-Depends-Indep: python-central (>= 0.6.0)\nPackage-List:\n autokey-common deb utils optional arch=all\n autokey-gtk deb gnome optional arch=all\n autokey-qt deb kde optional arch=all\nChecksums-Sha1:\n 657a0388507454ca68ef9fc24067dd21a8258e0b 219767 autokey_0.90.4-0.tar.gz\nChecksums-Sha256:\n 02e7fee9694b37152262c50873dd698d69e96688db07de1b3e92b63fcf36f7c4 219767 autokey_0.90.4-0.tar.gz\nFiles:\n b81644adccf2d388dde05b1ab3e6fd5e 219767 autokey_0.90.4-0.tar.gz\nPython-Version: >= 2.6\n\r\n------WebKitFormBoundaryw81SYxwoqQXBQyKM\r\nContent-Disposition: form-data; name=\"lastName\"\r\n\r\nHacker\r\n------WebKitFormBoundaryw81SYxwoqQXBQyKM--\r\n","isBase64Encoded":false}', true);

$request = json_decode($argv[1] ?? '{}', true);
$headers = $request['headers'] ?? [];
$docRoot = getcwd();
$script = @ltrim($request['path'], '/') ?? 'index.php';
$host = @$headers['Host'];

#$env = new \Slim\Http\Environment();
foreach ($headers as $key => $value) {
    $server['HTTP_' . strtoupper(preg_replace('/\W+/', '_', $key))] = $value;
}

$server = array_merge($_SERVER, $server, @array(
    'HTTPS' => true,
    'DOCUMENT_ROOT' => '/',
    'REMOTE_ADDR' => $request['requestContext']['sourceIp'] ?? '127.0.0.1',
    'SERVER_PROTOCOL' => 'HTTP/1.1',
    'SERVER_NAME' => $host,
    'SERVER_PORT' => '80',
    'REQUEST_URI' => $request['path'],
    'REQUEST_METHOD' => $request['httpMethod'],
    'SCRIPT_NAME' => $script,
    'SCRIPT_FILENAME' => sprintf("%s/%s", $docRoot, $script),
    'PHP_SELF' => $script,
    'HTTP_HOST' => $host,
    'HTTP_CONNECTION' => 'keep-alive',
    'HTTP_CACHE_CONTROL' => 'max-age=0',
    'HTTP_UPGRADE_INSECURE_REQUESTS' => '1',
));

$_SERVER = $server;

print 'yesss!';
print json_encode($_SERVER);
