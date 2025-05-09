# 🎒 قالب WordPress - topline-theme

##  نظرة عامة
هذا القالب مصمم خصيصًا لموقع **وكالة أفراس للسفر والسياحة**.  
يتميز القالب بدعمه الكامل للغة العربية واتجاه RTL، ويعمل بشكل ممتاز على جميع الشاشات.

---

##  المميزات

- رأس (Header) مع قائمة منسدلة.
- تذييل (Footer) يحتوي على معلومات التواصل وروابط مهمة.
- تصميم متجاوب (Responsive).
- دعم RTL تلقائي للغة العربية.
- متكامل مع WordPress.

---

##  طريقة التركيب

### 1. رفع القالب:
- اذهب إلى لوحة تحكم WordPress > المظهر > القوالب > أضف جديد > رفع قالب.
- اختر ملف `topline-theme.zip` واضغط على **"التنصيب الآن"**.

### 2. تفعيل القالب:
- بعد التنصيب، اضغط على **"تفعيل"**.

### 3. إعداد القائمة:
- 🧭 إعداد القوائم Navigation Menus

القالب يدعم قائمتين رئيسيتين:
1. القائمة الرئيسية (Main Menu) - تظهر في الهيدر.
2. قائمة الفوتر (Footer Menu) - تظهر في أسفل الموقع.

لإعداد القوائم:
1. اذهب إلى لوحة تحكم WordPress > المظهر > القوائم.
2. أنشئ قائمة جديدة، وأضف الروابط التي ترغب بها.
   - في حالة الموقع من نوع One Page: يمكنك استخدام "روابط مخصصة" وربطها بأقسام الصفحة مثل:
     - #home
     - #about
     - #programs
     - #services
     - #visas
     - #contact
3. بعد إنشاء القائمة، اختر مكان عرضها:
   - ✅ اختر "Main Menu" لعرضها في الهيدر.
   - ✅ اختر "Footer Menu" لعرضها في الفوتر.
4. احفظ القائمة.

💡 ملاحظات:
- تم تسجيل مواقع القوائم داخل ملف `functions.php`.
- القوائم يتم عرضها باستخدام دالة `wp_nav_menu()` داخل ملفات `header.php` و `footer.php`.




---

## 📁 محتويات القالب

- `style.css` – التنسيقات العامة
- `functions.php` – تحميل الملفات وتعريف القوائم
- `header.php` – رأس الموقع
- `footer.php` – التذييل
- `screenshot.png` – صورة المعاينة
- `assets/` – مجلد الصور والموارد

---

## صورة المعاينة
عند تفعيل القالب، ستظهر صورة `screenshot.png` تلقائيًا كمعاينة للقالب في لوحة WordPress.  
تأكد أن حجمها تقريبيًا **(1200×900 بكسل)** وامتدادها `.png`.

---

##  قاعدة البيانات
تم إرفاق نسخة من قاعدة البيانات في مجلد `database/`.  
يمكنك استيرادها عبر **phpMyAdmin** أو من خلال أدوات مثل **WP Migrate**.

---


هذا الملف يحتوي على خطوات إعداد النموذج والبلجنز الضرورية لعمل القالب بالشكل المطلوب.

--------------------------------------
📩 أولاً: استيراد نموذج التواصل (Fluent Forms)
--------------------------------------

1. تأكد من تثبيت وتفعيل إضافة Fluent Forms:
   - من لوحة التحكم → إضافات → أضف جديد → ابحث عن: Fluent Forms
   - اضغط "تثبيت" ثم "تفعيل"

2. استيراد النموذج:
   - انتقل إلى: Fluent Forms → الأدوات (Tools) → Import / Export
   - في قسم Import Forms:
     - اضغط "اختر ملف" واختر ملف contact.json
     - اضغط "Import"

3. لاستخدام النموذج في الصفحة:
   - و كان مثلا الكود 
     [fluentform id="3"]
   - هتروح علي صفحة index.php
   
     <?php echo do_shortcode('[fluentform id="1"]'); ?>
     فقط غيّر الرقم حسب رقم النموذج المستورد.

--------------------------------------
🔧 ثانياً: إعداد إضافة ACF (Advanced Custom Fields)
--------------------------------------

1. تأكد من تثبيت وتفعيل إضافة ACF:
   - من لوحة التحكم → إضافات → أضف جديد → ابحث عن: Advanced Custom Fields
   - اضغط "تثبيت" ثم "تفعيل"

2. القالب يستخدم ACF لإدارة المحتوى الديناميكي مثل:
   - البرامج السياحية
   - التأشيرات
   - خدمات السفر

3. لا حاجة للتعديل اليدوي على الحقول، فهي مضبوطة داخل ملف:
    acf-fields.php 

4. لإضافة أو تعديل البيانات:
   - من لوحة التحكم، اختر النوع المخصص مثل "البرامج السياحية"
   - اضغط "أضف جديد" وأدخل البيانات المطلوبة

طريقة اخري 
------------------
1. تأكد من تثبيت وتفعيل إضافة Advanced Custom Fields:
   - من لوحة التحكم → إضافات → أضف جديد → ابحث عن: Advanced Custom Fields
   - اضغط "تثبيت" ثم "تفعيل"

2. استيراد النموذج:
   - انتقل إلى: Advanced Custom Fields → الأدوات (Tools) → Import / Export
   - في قسم Import Forms:
     - اضغط "اختر ملف" واختر ملف acf.json
     - اضغط "Import"
--------------------------------------


##  ملاحظات تقنية

- يتم تحميل خط Font Awesome عبر `functions.php`.
- يتم تخزين الصور في `assets/images/`.
- القالب يدعم RTL تلقائيًا دون إعدادات إضافية