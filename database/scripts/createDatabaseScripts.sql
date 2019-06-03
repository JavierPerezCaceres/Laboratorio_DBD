--=======================
--	DROP relaciones
--=======================

DROP TABLE IF EXISTS clients CASCADE;
DROP TABLE IF EXISTS payment_methods CASCADE;
DROP TABLE IF EXISTS card_payments CASCADE;
DROP TABLE IF EXISTS purchase_orders CASCADE;
DROP TABLE IF EXISTS menu_reservations CASCADE;
DROP TABLE IF EXISTS menus CASCADE;
DROP TABLE IF EXISTS products CASCADE;
DROP TABLE IF EXISTS ingredients CASCADE;
DROP TABLE IF EXISTS menu_products CASCADE;
DROP TABLE IF EXISTS product_ingredients CASCADE;



--=====================================================================
-- Crear relaciones (ordenadas en base al nombre)
--=====================================================================

-- CREATE TABLE "clients" --------------------------------------
CREATE TABLE IF NOT EXISTS clients ( 
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"name" Character Varying( 255 ) NOT NULL,
	"lastname" Character Varying( 255 ) NOT NULL,
	"phone" Character Varying( 255 ) NOT NULL
 );
-- -------------------------------------------------------------

-- CREATE TABLE "card_payments" --------------------------------
CREATE TABLE IF NOT EXISTS card_payments ( 
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"autorization_code" Bigint NOT NULL,
	"transaction_code" Bigint NOT NULL,
	"card_number" Bigint NOT NULL,
	"account_type" Character Varying( 255 ) NOT NULL,
	"expiration_date" Character Varying( 255 ) NOT NULL
 );
-- -------------------------------------------------------------

-- CREATE TABLE "ingredients" --------------------------------------
CREATE TABLE IF NOT EXISTS ingredients ( 
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"name" Character Varying( 45 ) NOT NULL
 );
-- -------------------------------------------------------------

-- CREATE TABLE "menus" --------------------------------
CREATE TABLE IF NOT EXISTS menus (
	"id" serial NOT NULL, 
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"name" Character Varying( 45 ) NOT NULL,
	"total_price" Integer NOT NULL,
	"discount" Integer NOT NULL,
	"restaurant_id" Integer NOT NULL
 );
-- -------------------------------------------------------------

-- CREATE TABLE "menu_products" --------------------------------
CREATE TABLE IF NOT EXISTS menu_products (
	"id" serial NOT NULL, 
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"price" Integer NOT NULL,
	"menu_id" Integer NOT NULL,
	"product_id" Integer NOT NULL
 );
-- -------------------------------------------------------------

-- CREATE TABLE "menu_reservations" --------------------------------
CREATE TABLE IF NOT EXISTS menu_reservations (
	"id" serial NOT NULL, 
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"price" Integer NOT NULL,
	"quantity" Integer NOT NULL,
	"menu_id" Integer NOT NULL,
	"purchase_order_id" Integer NOT NULL
 );
-- -------------------------------------------------------------

-- CREATE TABLE "payment_methods" ------------------------------
CREATE TABLE IF NOT EXISTS payment_methods ( 
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"payment_type" Character Varying( 255 ) NOT NULL,
	"card_payment_id" Integer NOT NULL
 );
-- -------------------------------------------------------------

-- CREATE TABLE "products" --------------------------------------
CREATE TABLE IF NOT EXISTS products ( 
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"name" Character Varying( 45 ) NOT NULL
 );
-- -------------------------------------------------------------

-- CREATE TABLE "product_ingredients" --------------------------------
CREATE TABLE IF NOT EXISTS product_ingredients ( 
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"product_id" Integer NOT NULL,
	"ingredient_id" Integer NOT NULL
 );
-- -------------------------------------------------------------

-- CREATE TABLE "purchase_orders" ------------------------------
CREATE TABLE IF NOT EXISTS purchase_orders ( 
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"amount" Double Precision NOT NULL,
	"delivery_method" Character Varying( 255 ) NOT NULL,
	"purchase_type" Character Varying( 255 ) NOT NULL,
	"confirmation" Integer NOT NULL,
	"observations" Character Varying( 255 ) NOT NULL,
	"payment_method_id" Integer NOT NULL,
	"client_id" Integer NOT NULL,
	"delivery_id" Integer NOT NULL
 );
-- -------------------------------------------------------------



--===========================
-- PRIMARY KEYS & UNIQUE
--===========================

ALTER TABLE clients
    ADD CONSTRAINT clients_pkey
    PRIMARY KEY (id);

ALTER TABLE card_payments
    ADD CONSTRAINT card_payments_pkey
    PRIMARY KEY (id);

ALTER TABLE ingredients
ADD CONSTRAINT ingredients_pkey
PRIMARY KEY (id);

ALTER TABLE menus
    ADD CONSTRAINT menus_pkey
    PRIMARY KEY (id);

ALTER TABLE menu_products
    ADD CONSTRAINT menu_products_pkey
    PRIMARY KEY (id);

ALTER TABLE menu_reservations
    ADD CONSTRAINT menu_reservations_pkey
    PRIMARY KEY (id);

ALTER TABLE payment_methods
    ADD CONSTRAINT payment_methods_pkey
    PRIMARY KEY (id);

ALTER TABLE products
ADD CONSTRAINT products_pkey
PRIMARY KEY (id);

ALTER TABLE product_ingredients
ADD CONSTRAINT product_ingredients_pkey
PRIMARY KEY (id);

ALTER TABLE purchase_orders
    ADD CONSTRAINT purchase_orders_pkey
    PRIMARY KEY (id);

ALTER TABLE card_payments
    ADD CONSTRAINT card_payments_autorization_code_unique
    UNIQUE (autorization_code);

ALTER TABLE card_payments
    ADD CONSTRAINT card_payments_transaction_code_unique
    UNIQUE (transaction_code);

ALTER TABLE card_payments
    ADD CONSTRAINT card_payments_card_number_unique
    UNIQUE (card_number);



--===========================
-- FOREIGN KEYS
--===========================

-- CREATE "menus_restaurant_id_foreign" -----
--ALTER TABLE menus
--	ADD CONSTRAINT menus_restaurant_id_foreign
--	FOREIGN KEY ( restaurant_id )
--	REFERENCES restaurants ( "id" ) MATCH SIMPLE;
-- -------------------------------------------------------------

-- CREATE "menu_products_menu_id_foreign" -----
ALTER TABLE menu_products
	ADD CONSTRAINT menu_products_menu_id_foreign
	FOREIGN KEY ( menu_id )
	REFERENCES menus ( "id" ) MATCH SIMPLE;
-- -------------------------------------------------------------

-- CREATE "menu_products_product_id_foreign" -----
ALTER TABLE menu_products
	ADD CONSTRAINT menu_products_product_id_foreign
	FOREIGN KEY ( product_id )
	REFERENCES products ( "id" ) MATCH SIMPLE;
-- -------------------------------------------------------------

-- CREATE "menu_reservations_menu_id_foreign" -----
ALTER TABLE menu_reservations
	ADD CONSTRAINT menu_reservations_menu_id_foreign
	FOREIGN KEY ( menu_id )
	REFERENCES menus ( "id" ) MATCH SIMPLE;
-- -------------------------------------------------------------

-- CREATE "menu_reservations_purchase_order_id_foreign" -----
ALTER TABLE menu_reservations
	ADD CONSTRAINT menu_reservations_purchase_order_id_foreign
	FOREIGN KEY ( purchase_order_id )
	REFERENCES purchase_orders ( "id" ) MATCH SIMPLE;
-- -------------------------------------------------------------

-- CREATE "product_ingredients_product_id_foreign" -----
ALTER TABLE product_ingredients
	ADD CONSTRAINT product_ingredients_product_id_foreign
	FOREIGN KEY ( product_id )
	REFERENCES products ( "id" ) MATCH SIMPLE;
-- -------------------------------------------------------------

-- CREATE "product_ingredients_ingredient_id_foreign" -----
ALTER TABLE product_ingredients
	ADD CONSTRAINT product_ingredients_ingredient_id_foreign
	FOREIGN KEY ( ingredient_id )
	REFERENCES ingredients ( "id" ) MATCH SIMPLE;
-- -------------------------------------------------------------

-- CREATE "purchase_orders_payment_method_id_foreign" -----
ALTER TABLE purchase_orders
	ADD CONSTRAINT purchase_orders_payment_method_id_foreign
	FOREIGN KEY ( payment_method_id )
	REFERENCES payment_methods ( "id" ) MATCH SIMPLE;
-- -------------------------------------------------------------

-- CREATE "purchase_orders_client_id_foreign" -------------
ALTER TABLE purchase_orders
	ADD CONSTRAINT purchase_orders_client_id_foreign 
	FOREIGN KEY ( client_id )
	REFERENCES clients ( "id" ) MATCH SIMPLE;
-- -------------------------------------------------------------

-- CREATE "purchase_orders_delivery_id_foreign" -------------
--ALTER TABLE purchase_orders
--	ADD CONSTRAINT purchase_orders_delivery_id_foreign 
--	FOREIGN KEY ( delivery_id )
--	REFERENCES deliveries ( "id" ) MATCH SIMPLE;
-- -------------------------------------------------------------

-- CREATE "payment_methods_card_payment_id_foreign" -------
ALTER TABLE payment_methods
	ADD CONSTRAINT payment_methods_card_payment_id_foreign 
	FOREIGN KEY ( card_payment_id )
	REFERENCES card_payments ( "id" ) MATCH SIMPLE;
-- -------------------------------------------------------------
