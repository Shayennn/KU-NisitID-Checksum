# KU NisitID Checksum

เอาตรง ๆ คือเหมือนว่ายังไม่เห็นใครทำ หรือมีใครมี + หงุดหงิดเวลาเห็นหลาย ๆ เว็บไม่ยอมเช็ครหัสนิสิตก่อน Submit form เราก็เขียนมันขึ้นมาสะเลย

## ภาษาที่เขียนแล้ว

* Python3 (2.7?)
* Javasctipt
* PHP (Tested on PHP7.2)

## วิธีใช้

ดูใน directory example หรือข้างล่าง

### Python

```python
import KUChecksum
checksum1   = KUChecksum.GetNisitIDChecksum('611050337')
#>1
checksum2   = KUChecksum.GetNisitIDChecksum('6110503371')
#>1
checksum3   = KUChecksum.GetNisitIDChecksum(611050337)
#>1
is_valid1    = KUChecksum.VerifyNisitID(6110503371)
#>True
is_valid2    = KUChecksum.VerifyNisitID(6110503372)
#>False
```

### Javascript

```javascript
var checksum1   = GetNisitIDChecksum('611050337');//1
var checksum2   = GetNisitIDChecksum('6110503371');//1
var checksum3   = GetNisitIDChecksum(611050337);//1
var is_valid1    = VerifyNisitID(6110503371);//True
var is_valid2    = VerifyNisitID(6110503372);//False
```

ทั้งนี้อย่าลืมเรียกใช้ไฟล์ ku-checksum.js ก่อน

### PHP

```php
require_once('ku-checksum.php');
checksum1   = GetNisitIDChecksum('611050337');//1
checksum2   = GetNisitIDChecksum('6110503371');//1
checksum3   = GetNisitIDChecksum(611050337);//1
is_valid1    = KUChecksum.VerifyNisitID(6110503371);//True
is_valid2    = KUChecksum.VerifyNisitID(6110503372);//False
```
