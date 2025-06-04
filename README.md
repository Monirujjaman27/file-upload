# File Upload For Laravel

<a  target="_blank" href="https://packagist.org/packages/monirujjaman27/file-upload">🚀 Package on packagist.org</a>

### 📌 Install via Composer

Run the following command to install the package:

```bash
composer require mj07/fileupload
```

---

## 🛠️ Requirement

| Technology | Version |
| ---------- | ------- |
| **PHP**    | >=7.4   |

---

## 🎨 Usage In Laravel

```php
// import controller
use FileUpload
// Generate Slug
$filePath = FileUpload::upload($request->file('image'), 'uploads/images/');
dd($filePath);
```

#### 🎨 Output

```php
'uploads/images/file-name'
```

## 📌 Publish Vendor File

