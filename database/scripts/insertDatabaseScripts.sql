  
--=======================
--	INSERT
--=======================

-- Roles

INSERT INTO "public"."roles" ("id", "created_at", "updated_at", "type", "description")
VALUES ( '1', '2019-06-02 05:56:48', '2019-06-02 05:56:48', 'Administrador', 'Tiene permisos para modificar información de la página');

INSERT INTO "public"."roles" ("id", "created_at", "updated_at", "type", "description")
VALUES ( '2', '2019-06-02 05:56:48', '2019-06-02 05:56:48', 'Restaurante', 'Ofrece Comida');

INSERT INTO "public"."roles" ("id", "created_at", "updated_at", "type", "description")
VALUES ( '3', '2019-06-02 05:56:48', '2019-06-02 05:56:48', 'Cliente', 'Consumidor el cual hace pedidos');

-- Clientes

INSERT INTO "public"."clients" ( "created_at", "id", "lastname", "name",
	"phone", "updated_at")
VALUES ( '2019-06-02 05:56:48','1','martin','nicole','+23456789',
	'2019-06-03 05:56:48');

-- Usuarios

INSERT INTO "public"."users" ("id", "email", "password", "role_id", "client_id", 
	"name", "email_verified_at", "remember_token", "created_at", "updated_at")
VALUES ( '1', 'nicole.martin@usach.cl', 'passwordXD', '3', '1','Nicole','2019-06-03 05:56:48','456543234567765','2019-06-03 05:56:48','2019-06-03 05:56:48');

-- Restaurantes

INSERT INTO "public"."restaurants" ( "id","created_at", "updated_at",
	"category", "contact_number", "kitchen_type", "opening_hour", "closing_hour",
	"person_cost", "wait_time", "direction", "user_id")
VALUES ( '1','2019-06-03 05:56:48','2019-06-03 05:56:48','China','+56923423422','Vegetariana',
	'08:00:00','20:00:00','9000','45','Tres Norte','1');

-- Menus

INSERT INTO "public"."menus" ( "created_at", "id", "name", "total_price",
 "discount", "restaurant_id", "updated_at")
VALUES ( '2019-06-02 11:13:56','1','Vegano','4990','0','1', '2019-06-03 06:43:48');

-- Productos

INSERT INTO "public"."products" ( "created_at", "id", "name","updated_at")
VALUES ( '2019-06-02 02:33:06','1','Sandwich','2019-06-03 03:48:59');

-- Ingredientes

INSERT INTO "public"."ingredients" ( "created_at", "id", "name","updated_at")
VALUES ( '2019-06-02 01:56:06','1','Lechuga','2019-06-03 07:31:59');

-- Producto Ingrediente

INSERT INTO "public"."product_ingredients" ( "created_at", "id",
 "product_id", "ingredient_id", "updated_at")
VALUES ( '2019-06-02 05:56:48','1','1','1','2019-06-03 05:56:48');

-- Menu Producto

INSERT INTO "public"."menu_products" ( "created_at", "id", "price",
 "menu_id", "product_id", "updated_at")
VALUES ( '2019-06-02 05:56:48','1','1590','1','1',
	'2019-06-03 06:43:48');

-- Deliveries

INSERT INTO "public"."deliveries" ( "id","created_at", "updated_at",
	"receptor_name","contact_number","extra_wait_time","delivery_address","restaurant_id")
VALUES ( '1','2019-06-03 05:56:48','2019-06-03 05:56:48','Cristian Matias Rodriguez Salazar',
'+23356679','30','Simon Bolivar 345','1');

-- Historial de página

INSERT INTO "public"."webpage_records" ( "id","created_at", "updated_at", "action")
VALUES ( '1','2019-06-03 05:56:48','2019-06-03 05:56:48','Se ha registrado el usuario id:1 en la pagina');

-- Valoraciones

INSERT INTO "public"."valorations" ( "id","created_at", "updated_at",
"score","comment","client_id","restaurant_id")
VALUES ( '1','2019-06-03 05:56:48','2019-06-03 05:56:48','4','Buen servicio, pero pudo ser mejor.','1','1');

-- Solicitud de restaurants

INSERT INTO "public"."restaurant_requests" ( "id","created_at", "updated_at",
"company_rut","cod_sis","owner_name","condition","user_id")
VALUES ( '1','2019-06-03 05:56:48','2019-06-03 05:56:48','123456789','746539887','Carlos Fernandes Serra Herrero','1','1');

-- Pago con Tarjeta

INSERT INTO "public"."card_payments" ( "account_type", "autorization_code",
	"card_number", "created_at", "expiration_date", "id", "transaction_code",
	"updated_at")
VALUES ( '2','234567890','12456789876','2019-06-03 05:56:48','12/12','1',
	'234567890','2019-06-03 05:56:48');

-- Medio de Pago

INSERT INTO "public"."payment_methods" ( "card_payment_id", "created_at",
	"id", "payment_type", "updated_at")
VALUES ( '1','2019-06-03 05:56:48','1','2','2019-06-03 05:56:48' );

-- Orden de Compra

INSERT INTO "public"."purchase_orders" ( "amount", "client_id", "confirmation",
 "created_at", "delivery_id", "delivery_method", "id", "observations",
 "payment_method_id", "purchase_type", "updated_at")
VALUES ( '234567','1','1','2019-06-03 05:56:48','3','2','1','holi','1',
	'2','2019-06-03 05:56:48');

-- Orden de Compra Menu

INSERT INTO "public"."menu_reservations" ( "created_at", "id", "price", "quantity",
 "menu_id", "purchase_order_id", "updated_at")
VALUES ( '2019-06-02 05:56:48','1','5790','1','1','1', '2019-06-03 05:56:48');

-- Categoria

INSERT INTO "public"."categories" ( "id","created_at", "updated_at",
	"name")
VALUES ( '1','2019-06-03 05:56:48','2019-06-03 05:56:48','Sin Gluten');

-- Producto Categoria

INSERT INTO "public"."product_categories" ( "id","created_at", "updated_at",
	"product_id", "category_id")
VALUES ( '1','2019-06-03 05:56:48','2019-06-03 05:56:48','1','1');

-- Mesa

INSERT INTO "public"."tables" ( "id","created_at", "updated_at",
	"capacity","number","avaible","restaurant_id")
VALUES ( '1','2019-06-03 05:56:48','2019-06-03 05:56:48','3','22','0','1');

-- Reservación de Mesas

INSERT INTO "public"."table_reservations" ( "id","created_at", "updated_at",
	"reserve_number","reserve_name","people_quantity","reserve_date","reserve_hour",
	"reserve_confirmation", "table_id", "purchase_order_id")
VALUES ( '1','2019-06-03 05:56:48','2019-06-03 05:56:48','23','JavierJorge','4',
	'2019-06-03','14:00:00','1','1','1');

-- Ciudad

INSERT INTO "public"."cities" ( "id","created_at", "updated_at", "name")
VALUES ( '1', '2019-06-03 05:56:48', '2019-06-03 05:56:48', 'Santiago');

-- Comuna

INSERT INTO "public"."districts" ("id","created_at", "updated_at", "name", "city_id")
VALUES ('1', '2019-06-03 05:56:48', '2019-06-03 05:56:48', 'Pudahuel', '1');

-- Dirección

INSERT INTO "public"."addresses" ("id","created_at", "updated_at", "street", "number", "district_id", "client_id")
VALUES ('1', '2019-06-03 05:56:48', '2019-06-03 05:56:48', 'Av. Serrano', '528-B', '1', '1');



