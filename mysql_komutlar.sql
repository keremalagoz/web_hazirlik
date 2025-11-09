MySql Sorgu Fonksiyonları Sakila.db üzerinde anlatılmıştır.
------------------------------------------------------------------------------------------------
*** where
koşul durumları için and ve or ile birlikte kullanılır
------------------------------------------------------------------------------------------------
select * from payment where customer_id=2 and staff_id = 2
select * from payment where customer_id=2 or staff_id = 2
------------------------------------------------------------------------------------------------
select * from payment where customer_id IN (2,3);
select * from payment where customer_id not IN (2,3);
------------------------------------------------------------------------------------------------
# aşagidakilerin 3 ü aynı görevi görür
select * from payment where customer_id <> 2;
select * from payment where customer_id != 2;
select * from payment where not customer_id = 2;
select * from payment where staff_id = 2 and not customer_id = 2;
------------------------------------------------------------------------------------------------ 

*** Between
Bir alandaki değeri, belirtilen aralıkta olan kayıtları ifade etmek için alan_adi 
between min and max ifadesi kullanılır.
------------------------------------------------------------------------------------------------
select * from payment where amount BETWEEN 2.99 and 3.99
select * from payment where (amount BETWEEN 2.99 and 3.99) and staff_id = 1
------------------------------------------------------------------------------------------------


*** order by ifadesiyle sıralama yapılacağı belirtildikten sonra sıralamanın hangi alana göre yapılacağı belirtilmiştir. 
Sıralama türü olarak asc (artan, a-z, 0-9) yada desc (azalan, z-a, 9-0) kullanılır. 
Eğer hiçbir sıralama türü belirtilmezse varsayılan olarak artan sıralama yapılır.
sorguda where varsa mutlaka order by dan daha önce olmalıdır.
------------------------------------------------------------------------------------------------
select * from actor order by first_name asc, last_name desc
------------------------------------------------------------------------------------------------



*** like
Burada aranan değerin sağına % işareti konulursa (aranan%) aranan kelime ile başlayan, 
soluna % işareti konulursa (%aranan) aranan kelime ile biten, her iki tarafına % işareti 
konulursa (%aranan%) içerisinde aranan kelimesi geçen kayıtlar anlamına gelmektedir. 
• adi like 'A%' > Adı A ile başlayanlar
• adi like '%a' > Adı a ile bitenler
• adi like '%a%' > Adında a harfi bulunanlar
• adi like '___a%' > Dördüncü karakteri a olanlar

------------------------------------------------------------------------------------------------
select * from actor where first_name like '%A' and first_name like 'A%'
select * from actor where (first_name like '%A%' or first_name like 'A%') and last_name = 'PENN'
------------------------------------------------------------------------------------------------


*** count(alan)
Belirtilen alandaki kayıt sayısını bulur. 
------------------------------------------------------------------------------------------------
select count(last_name) as soy_sayi, count(first_name) as ad_say from actor;
select count(last_name) as soy_sayi from actor where actor_id < 25
------------------------------------------------------------------------------------------------



*** min(alan)
Belirtilen alandaki en küçük değeri bulur.
------------------------------------------------------------------------------------------------
select min(amount) as en_kucuk from payment
------------------------------------------------------------------------------------------------



*** max(alan)
Belirtilen alandaki en büyük değeri bulur.
------------------------------------------------------------------------------------------------
select max(amount) as en_buyuk from payment
------------------------------------------------------------------------------------------------


*** avg(alan)
Belirtilen alandaki değerlerin ortalamasını bulur.
------------------------------------------------------------------------------------------------
select avg(amount) as ort from payment
------------------------------------------------------------------------------------------------


*** sum(alan)
Belirtilen alandaki değerlerin toplamını bulur.
------------------------------------------------------------------------------------------------
select sum(amount) as toplam from payment
select sum(amount) as toplam from payment where amount > 5
------------------------------------------------------------------------------------------------
*** select distinct    (MySql in eski versiyonlarında distinctrow )

 Bir tablodan veri sorgularken, yinelenen satırlar alabilirsiniz. Bu yinelenen satırları kaldırmak için, 
 SELECT deyiminde DISTINCT yan tümcesini kullanın
select length from film  order by length asc
# tüm film sürelerini çeker
select distinct length from film  order by length asc
# tekrar eden film sürelerini tekrar almaz
select distinct first_name, last_name from actor
# aynı isimde ve soyisimde aktör varsa birkez alır
------------------------------------------------------------------------------------------------
*** group by

select length from film  group by length order by length // 140 satir
select distinct length from film order by length         // 140 satır
# yukarıdaki komut select distinct ile benzer sonuç verir ancak ancak farklı sütunlarda
# istenince sonuç değişmeye başlayacaktır. 
select length, title from film  group by length order by length; // 140 satir
select distinct length, title from film order by length;         // 1000 satır
# group by ile aynı uzunluklu filmlerin sadece 1 tanesi (ilk) alındı diğerleri alınmadı

# GROUP BY, AVG, MAX, MIN, SUM ve COUNT gibi toplu işlevleri kullanmanızı sağlar.
 
select length, count(length) from film  group by length order by length;
# her bir uzunluktan kaç film olduğunu bulmak için kullnılabilir
select release_year, AVG(length) as ort from film  group by release_year;
#yıllara göre süre ortalamaları 

*** having 
# having deyimi group by ile birlikte kullanılmazsa where görevi görür
select * from film having rental_duration = 3;   // 203 satır
select * from film where rental_duration = 3;	 // 203 satır

# group by ile kullanıldığında ise having grupda filitreleme yaparken
# where ise satırda filitreleme yapar 

select * from film group by release_year having rental_duration = 3;
select * from film where rental_duration = 3 group by release_year ;
select * from film group by rental_duration having rental_duration IN (3,6); 

*** Birden fazla tablo kullanılan sorgularda tabloların arasında ilişki yani ortak alanların bulunması gerekir. 
Bu ortak alanlar where ifadesinden sonra eşitlenerek ilişkili tablolar birleştirilmiş olur. 
Tablolara birleştirilerek ekranda daha anlamlı sonuçlar gösterilebilir.
------------------------------------------------------------------------------------------------
select * from film, language          
# film deki herbir kayıt için language deki her kaydı tekrar çeker, yanlış kullanım

select * from film as f, language as l where f.language_id = l.language_id    
# film deki herbir kayıt için dilini getirir
select f.title, l.name from film as f, language as l where f.language_id = l.language_id   
# filmlerin dillerini getirir
select * from film as f, film_category as c where f.film_id= c.film_id and c.category_id = 11

------------ JOIN KOmutları-----------------
INNER Join birden fazla tablolardaki verileri eşleştirerek tek sorguda ver çekmek için kullanılır,
Database’de bir veriyi her tabloda tekrarlamak yerine genelde her tabloyu birbirine id’ler ile bağlarız.
inner join kullanımında her iki tablodan iki parametreyi eşleştirerek aldığımızda, 
eğer ikinci tabloda ayni id’den eşleştirilebilecek bir veri var ise getirilir 
yok ise sorgu cevabında o kayıt hiç görünmez 
*** iller tablosuna ilçesi olmayan yeni bir il ekledik, inner join yapısında bu veri çekilmedi
(iki yöntem de aynı sonucu verir)
select * from country as A inner join city as C on ( A.country_id = C.country_id )
select * from country as A, city as C where  A.country_id = C.country_id 

---------------- IL-ILCE-DB ------------------------------
(iki yöntem de aynı sonucu verir)
select * from iller as A, ilceler as B where A.id = B.il_id
select * from iller as A inner join ilceler as B on ( A.id = B.il_id )

illerin ilçe sayılarını bulmak için :

select count(A.il_adi) as ilce_sayisi, A.il_adi from iller as A inner JOIN ilceler as B on A.id = B.il_id 
group By A.il_adi order by ilce_sayisi desc


Adından da anlaşılacağı üzere GROUP BY ifadesi gruplama yapar. 
Yani sonuç kümesini bir veya birden fazla kolona göre gruplar. 

------------------------------------------------------------------------------------------------
LEFT Join de ise ilk tablomuzda veri var ama ikinci tabloda eşleşecek veri yok ise, fakat bu kayıtların yinede 
sorgularda gözükmesini istiyor isek kullanılır. 
Bu tür verilerin ilgili değerleri null olarak gelecektir. 
*** iller tablosuna ilçesi olmayan yeni bir il ekledik, left join yapısında bu veri de çekildi

select * from iller as A left join ilceler as B on ( A.id = B.il_id )

yalnızca bu özellikteki verilerin çekilmesini istersek Where koşulu ile ilgili değerlerin null olduğu kontrol edilebilir

select * from iller as A left join ilceler as B on ( A.id = B.il_id ) where B.il_id is NULL

------------------------------------------------------------------------------------------------

RIGHT Join ise, LEFT join in tam tersi olarak çalışır. Yani ilk tablomuzda veri yok ancak ikinci tablomuzda veri var ise
bu kayıtlarında sorguda görünmesini sağlar.
*** ilceler tablosuna illler tablosunda karşılığı olmayan ilçeler ekledik, right join yapısında bu veri de çekilde

select * from iller as A right join ilceler as B on ( A.id = B.il_id ) 

yalnızca bu özellikteki verilerin çekilmesini istersek Where koşulu ile ilgili değerlerin null olduğu kontrol edilebilir

select * from iller as A right join ilceler as B on ( A.id = B.il_id ) where A.id is NULL 

------------------------------------------------------------------------------------------------
CROSS JOIN işleminde ilçeler tablosundaki her değer için iller tablosundaki tüm değerler tekrar tekrar işlenir.
(iki yöntem de aynı sonucu verir)
select * from iller as A CROSS JOIN ilceler as B 
select * from iller, ilceler


--------------------------------------------------------------------------------------------------
FULL OUTER JOIN fonksiyonu MySQL de yoktur. 
Ancak kolaylıkla, left join ve right join birleşimi olarak düşünülür

SELECT * FROM iller as A LEFT OUTER JOIN ilceler as B ON (A.id = B.il_id)
UNION
SELECT * FROM iller as A RIGHT OUTER JOIN ilceler as B ON (A.id = B.il_id)

Birleim yerine kesişim kullanırsak tekrar inner join elde etmiş oluruz

SELECT * FROM iller as A LEFT JOIN ilceler as B ON (A.id = B.il_id)
INTERSECT
SELECT * FROM iller as A RIGHT JOIN ilceler as B ON (A.id = B.il_id)
--------------------------------------------------------------------------------------------------

Yalnızca kesişimde olmayan elemanları bulmak için

SELECT * FROM iller as A LEFT JOIN ilceler as B ON (A.id = B.il_id) where B.il_id IS NULL
UNION
SELECT * FROM iller as A RIGHT JOIN ilceler as B ON (A.id = B.il_id) where A.id IS NULL

kullanıabiir.

