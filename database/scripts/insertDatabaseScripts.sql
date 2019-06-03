--=======================
--	INSERT 
--=======================

-- Clientes

INSERT INTO "public"."clients" ( "created_at", "id", "lastname", "name", 
	"phone", "updated_at") 
VALUES ( '2019-06-02 05:56:48','1','martin','nicole','+23456789',
	'2019-06-03 05:56:48');

-- Orden de Compra

INSERT INTO "public"."purchase_orders" ( "amount", "client_id", "confirmation",
 "created_at", "delivery_id", "delivery_method", "id", "observations", 
 "payment_method_id", "purchase_type", "updated_at") 
VALUES ( '234567','1','1','2019-06-03 05:56:48','3','2','1','holi','2',
	'2','2019-06-03 05:56:48');

-- Medio de Pago

INSERT INTO "public"."payment_methods" ( "card_payment_id", "created_at", 
	"id", "payment_type", "updated_at") 
VALUES ( '2','2019-06-03 05:56:48','2','2','2019-06-03 05:56:48' );

-- Pago con Tarjeta

INSERT INTO "public"."card_payments" ( "account_type", "autorization_code", 
	"card_number", "created_at", "expiration_date", "id", "transaction_code", 
	"updated_at") 
VALUES ( '2','234567890','12456789876','2019-06-03 05:56:48','12/12','2',
	'234567890','2019-06-03 05:56:48');