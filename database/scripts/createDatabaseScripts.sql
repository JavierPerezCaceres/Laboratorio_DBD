--=======================
---	DROP relaciones
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
DROP TABLE IF EXISTS roles CASCADE;
DROP TABLE IF EXISTS cities CASCADE;
DROP TABLE IF EXISTS districts CASCADE;
DROP TABLE IF EXISTS addresses CASCADE;
DROP TABLE IF EXISTS users CASCADE;
DROP TABLE IF EXISTS restaurants CASCADE;
DROP TABLE IF EXISTS table_reservations CASCADE;
DROP TABLE IF EXISTS tables CASCADE;
DROP TABLE IF EXISTS product_categories CASCADE;
DROP TABLE IF EXISTS categories CASCADE;
DROP TABLE IF EXISTS deliveries CASCADE;
DROP TABLE IF EXISTS restaurant_requests CASCADE;
DROP TABLE IF EXISTS valorations CASCADE;
DROP TABLE IF EXISTS webpage_records CASCADE;


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

-- CREATE TABLE "roles" ----------------------------------------
CREATE TABLE roles (
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"type" Character Varying( 255 ) NOT NULL,
	"description" Character Varying( 255 ) NOT NULL
);
-- -------------------------------------------------------------

-- CREATE TABLE "cities" ---------------------------------------
CREATE TABLE cities (
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"name" Character Varying( 255 ) NOT NULL
);
-- -------------------------------------------------------------

-- CREATE TABLE "districts" ------------------------------------
CREATE TABLE districts (
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"name" Character Varying( 255 ) NOT NULL,
	"city_id" Integer NOT NULL
);
-- -------------------------------------------------------------

-- CREATE TABLE "addresses" ------------------------------------
CREATE TABLE addresses (
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"street" Character Varying( 255 ) NOT NULL,
	"number" Character Varying( 255 ) NOT NULL,
	"district_id" Integer NOT NULL,
	"client_id" Integer NOT NULL
);
-- -------------------------------------------------------------

-- CREATE TABLE "users" ----------------------------------------
CREATE TABLE users (
	"id" serial NOT NULL,
	"email" Character Varying( 255 ) NOT NULL,
	"password" Character Varying( 255 ) NOT NULL,
	"role_id" Integer NOT NULL,
	"client_id" Integer NOT NULL,
	"name" Character Varying( 255 ) NOT NULL,
	"email_verified_at" Timestamp( 0 ) Without Time Zone,
	"remember_token" Character Varying( 100 ),
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone
);
-- -------------------------------------------------------------

-- CREATE TABLE "restaurants" --------------------------------------
CREATE TABLE IF NOT EXISTS restaurants (
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"category" Character Varying(50),
	"contact_number" Character Varying(14),
	"kitchen_type" Character Varying(50),
	"opening_hour" Time,
	"closing_hour" Time,
	"person_cost" Integer NOT NULL,
	"wait_time" Integer NOT NULL,
	"direction" Character Varying(255),
	"user_id" Integer NOT NULL

 );
-- -------------------------------------------------------------

-- CREATE TABLE "table_reservations" --------------------------------------
CREATE TABLE IF NOT EXISTS table_reservations (
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"reserve_number" Integer NOT NULL,
	"reserve_name" Character Varying(255),
	"people_quantity" Integer NOT NULL,
	"reserve_date" Date,
	"reserve_hour" Time,
	"reserve_confirmation" Integer NOT NULL,
	"table_id" Integer NOT NULL,
	"purchase_order_id" Integer NOT NULL

 );
-- -------------------------------------------------------------

-- CREATE TABLE "tables" --------------------------------------
CREATE TABLE IF NOT EXISTS tables (
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"capacity" Integer NOT NULL,
	"number" Integer NOT NULL,
	"avaible" Integer NOT NULL,
	"restaurant_id" Integer NOT NULL

 );
-- -------------------------------------------------------------

-- CREATE TABLE "product_categories" --------------------------------------
CREATE TABLE IF NOT EXISTS product_categories (
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"product_id" Integer NOT NULL,
	"category_id" Integer NOT NULL

 );
-- -------------------------------------------------------------

-- CREATE TABLE "categories" --------------------------------------
CREATE TABLE IF NOT EXISTS categories (
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"name" Character Varying(255)

 );
-- -------------------------------------------------------------

-- CREATE TABLE "restaurant_requests" --------------------------
CREATE TABLE restaurant_requests (
	"id" serial NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"company_rut" Integer NOT NULL,
	"cod_sis" Integer NOT NULL,
	"owner_name" Character Varying( 255 ) NOT NULL,
	"condition" Boolean NOT NULL,
	"user_id" Integer NOT NULL
  );

	-- -------------------------------------------------------------

-- CREATE TABLE "valorations" ----------------------------------
CREATE TABLE valorations (
 	"id"serial NOT NULL,
 	"created_at" Timestamp( 0 ) Without Time Zone,
 	"updated_at" Timestamp( 0 ) Without Time Zone,
 	"score" Integer NOT NULL,
 	"comment" Character Varying( 255 ) NOT NULL,
 	"purchase_order_id" Integer NOT NULL,
 	"restaurant_id" Integer NOT NULL
);

-- -------------------------------------------------------------

-- CREATE TABLE "webpage_records" ------------------------------
CREATE TABLE webpage_records (
  	"id" serial NOT NULL,
  	"created_at" Timestamp( 0 ) Without Time Zone,
  	"updated_at" Timestamp( 0 ) Without Time Zone,
  	"action" Character Varying( 255 ) NOT NULL
);

-- -------------------------------------------------------------

-- CREATE TABLE "deliveries" -----------------------------------
CREATE TABLE deliveries (
   	"id" serial NOT NULL,
   	"created_at" Timestamp( 0 ) Without Time Zone,
   	"updated_at" Timestamp( 0 ) Without Time Zone,
   	"receptor_name" Character Varying( 255 ) NOT NULL,
   	"contact_number" Character Varying( 255 ) NOT NULL,
   	"extra_wait_time" Integer NOT NULL,
   	"delivery_address" Character Varying( 255 ) NOT NULL,
   	"restaurant_id" Integer NOT NULL
);


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

ALTER TABLE restaurant_requests
		ADD CONSTRAINT restaurant_requests_pkey
		PRIMARY KEY (id);

ALTER TABLE valorations
		ADD CONSTRAINT valorations_pkey
		PRIMARY KEY (id);

ALTER TABLE webpage_records
		ADD CONSTRAINT webpage_records_pkey
		PRIMARY KEY(id);

ALTER TABLE restaurants
    ADD CONSTRAINT restaurants_pkey
    PRIMARY KEY (id);

ALTER TABLE table_reservations
    ADD CONSTRAINT table_reservations_pkey
    PRIMARY KEY (id);

ALTER TABLE tables
    ADD CONSTRAINT table_pkey
    PRIMARY KEY (id);

ALTER TABLE product_categories
    ADD CONSTRAINT product_categories_pkey
    PRIMARY KEY (id);

ALTER TABLE categories
    ADD CONSTRAINT categories_pkey
    PRIMARY KEY (id);

ALTER TABLE roles
	ADD CONSTRAINT roles_pkey
	PRIMARY KEY (id);

ALTER TABLE cities
	ADD CONSTRAINT cities_pkey
	PRIMARY KEY (id);

ALTER TABLE districts
	ADD CONSTRAINT districts_pkey
	PRIMARY KEY (id);

ALTER TABLE addresses
	ADD CONSTRAINT addresses_pkey
	PRIMARY KEY (id);

ALTER TABLE users
	ADD CONSTRAINT users_pkey
	PRIMARY KEY (id);

ALTER TABLE deliveries
	ADD CONSTRAINT deliveries_pkey
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

ALTER TABLE restaurant_requests
		ADD CONSTRAINT resturant_requests_company_rut_unique
		UNIQUE (company_rut);

ALTER TABLE restaurant_requests
		ADD CONSTRAINT resturant_requests_cod_sis_unique
		UNIQUE (cod_sis);

--===========================
-- FOREIGN KEYS
--===========================

-- CREATE "menus_restaurant_id_foreign" -----
ALTER TABLE menus
	ADD CONSTRAINT menus_restaurant_id_foreign
	FOREIGN KEY ( restaurant_id )
	REFERENCES restaurants ( "id" ) MATCH SIMPLE;
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


-- CREATE LINK "deliveries_restaurant_id_foreign" --------------
ALTER TABLE deliveries
  ADD CONSTRAINT deliveries_restaurant_id_foreign FOREIGN KEY ( "restaurant_id" )
  REFERENCES restaurants ( "id" ) MATCH SIMPLE
  ON DELETE Cascade
  ON UPDATE No Action;


-- CREATE "payment_methods_card_payment_id_foreign" -------
ALTER TABLE payment_methods
	ADD CONSTRAINT payment_methods_card_payment_id_foreign
	FOREIGN KEY ( card_payment_id )
	REFERENCES card_payments ( "id" ) MATCH SIMPLE;
-- -------------------------------------------------------------

-- CREATE LINK "districts_city_id_foreign" ---------------------
ALTER TABLE districts
	ADD CONSTRAINT districts_city_id_foreign FOREIGN KEY ( city_id )
	REFERENCES cities ( "id" ) MATCH SIMPLE
	ON DELETE Cascade
	ON UPDATE No Action;
-- -------------------------------------------------------------

-- CREATE LINK "addresses_user_id_foreign" ---------------------
ALTER TABLE addresses
	ADD CONSTRAINT addresses_client_id_foreign FOREIGN KEY ( client_id )
	REFERENCES clients ( "id" ) MATCH SIMPLE
	ON DELETE Cascade
	ON UPDATE No Action;
-- -------------------------------------------------------------

-- CREATE LINK "addresses_district_id_foreign" -----------------
ALTER TABLE addresses
	ADD CONSTRAINT addresses_district_id_foreign FOREIGN KEY ( district_id )
	REFERENCES districts ( "id" ) MATCH SIMPLE
	ON DELETE Cascade
	ON UPDATE No Action;
-- -------------------------------------------------------------

-- CREATE LINK "users_client_id_foreign" -----------------------
ALTER TABLE users
	ADD CONSTRAINT users_client_id_foreign FOREIGN KEY ( client_id )
	REFERENCES clients ( "id" ) MATCH SIMPLE
	ON DELETE Cascade
	ON UPDATE No Action;
-- -------------------------------------------------------------

-- CREATE LINK "users_role_id_foreign" -------------------------
ALTER TABLE users
	ADD CONSTRAINT users_role_id_foreign FOREIGN KEY ( role_id )
	REFERENCES roles ( "id" ) MATCH SIMPLE
	ON DELETE Cascade
	ON UPDATE No Action;
-- -------------------------------------------------------------

-- CREATE "restaurants_user_id_foreign" ------------------------
ALTER TABLE restaurants
	ADD CONSTRAINT restaurants_user_id_foreign
	FOREIGN KEY ( "user_id" )
	REFERENCES users ( "id" ) MATCH SIMPLE
	ON DELETE Cascade
	ON UPDATE No Action;
-- -------------------------------------------------------------

-- CREATE "table_reservations_table_id_foreign" ----------------
ALTER TABLE table_reservations
	ADD CONSTRAINT table_reservations_table_id_foreign
	FOREIGN KEY ( "table_id" )
	REFERENCES tables ( "id" ) MATCH SIMPLE
	ON DELETE Cascade
	ON UPDATE No Action;
-- -------------------------------------------------------------

-- CREATE "table_reservations_purchase_order_id_foreign" -------
ALTER TABLE table_reservations
	ADD CONSTRAINT table_reservations_purchase_order_id_foreign
	FOREIGN KEY ( "purchase_order_id" )
	REFERENCES table_reservations ( "id" ) MATCH SIMPLE
	ON DELETE Cascade
	ON UPDATE No Action;
-- -------------------------------------------------------------

-- CREATE "tables_restaurant_id_foreign" ----------------
ALTER TABLE tables
	ADD CONSTRAINT tables_restaurant_id_foreign
	FOREIGN KEY ( "restaurant_id" )
	REFERENCES restaurants ( "id" ) MATCH SIMPLE
	ON DELETE Cascade
	ON UPDATE No Action;
-- -------------------------------------------------------------

-- CREATE "product_categories_product_id_foreign" ----------------
ALTER TABLE product_categories
	ADD CONSTRAINT product_categories_product_id_foreign
	FOREIGN KEY ( "product_id" )
	REFERENCES products ( "id" ) MATCH SIMPLE
	ON DELETE Cascade
	ON UPDATE No Action;
-- -------------------------------------------------------------

-- CREATE "product_categories_category_id_foreign" ----------------
ALTER TABLE product_categories
	ADD CONSTRAINT product_categories_category_id_foreign
	FOREIGN KEY ( "category_id" )
	REFERENCES categories ( "id" ) MATCH SIMPLE
	ON DELETE Cascade
	ON UPDATE No Action;
-- -------------------------------------------------------------

-- CREATE LINK "restaurant_requests_user_id_foreign" -----------
ALTER TABLE restaurant_requests
	ADD CONSTRAINT restaurant_requests_user_id_foreign FOREIGN KEY ( "user_id" )
	REFERENCES users ( "id" ) MATCH SIMPLE
	ON DELETE Cascade
	ON UPDATE No Action;

-- -------------------------------------------------------------
-- CREATE LINK "valorations_restaurant_id_foreign" -------------
ALTER TABLE valorations
  ADD CONSTRAINT valorations_restaurant_id_foreign FOREIGN KEY ( "restaurant_id" )
  REFERENCES restaurants ( "id" ) MATCH SIMPLE
  ON DELETE Cascade
  ON UPDATE No Action;

-- -------------------------------------------------------------

-- CREATE LINK "valorations_purchase_order_id_foreign" ---------
ALTER TABLE valorations
	ADD CONSTRAINT valorations_purchase_order_id_foreign FOREIGN KEY ( "purchase_order_id" )
	REFERENCES purchase_orders ( "id" ) MATCH SIMPLE
	ON DELETE Cascade
	ON UPDATE No Action;
-- -------------------------------------------------------------


-- CREATE TABLE Triggers
CREATE 
OR REPLACE FUNCTION giveRole() RETURNS trigger AS $$ BEGIN 
UPDATE 
  users 
SET 
  role_id = 1 
WHERE 
  users.id = NEW.id; RETURN NEW; END $$ LANGUAGE plpgsql;;
CREATE TRIGGER asignRole 
AFTER 
  INSERT ON users FOR EACH ROW EXECUTE PROCEDURE giveRole();;
