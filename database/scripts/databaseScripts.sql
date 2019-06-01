--=======================
--	DROP relaciones
--=======================

DROP TABLE IF EXISTS clients CASCADE;
DROP TABLE IF EXISTS payment_methods CASCADE;
DROP TABLE IF EXISTS card_payments CASCADE;
DROP TABLE IF EXISTS purchase_orders CASCADE;


--=====================================================================
-- Crear relaciones (ordenadas en base al nombre)
--=====================================================================

-- CREATE TABLE "clients" --------------------------------------
CREATE TABLE IF NOT EXISTS clients ( 
	"id" Bigint DEFAULT nextval('clients_id_seq'::regclass) NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"name" Character Varying( 255 ) NOT NULL,
	"lastname" Character Varying( 255 ) NOT NULL,
	"phone" Character Varying( 255 ) NOT NULL
 ;
-- -------------------------------------------------------------

-- CREATE TABLE "card_payments" --------------------------------
CREATE TABLE IF NOT EXISTS card_payments ( 
	"id" Bigint DEFAULT nextval('card_payments_id_seq'::regclass) NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"autorization_code" Bigint NOT NULL,
	"transaction_code" Bigint NOT NULL,
	"card_number" Bigint NOT NULL,
	"account_type" Character Varying( 255 ) NOT NULL,
	"expiration_date" Character Varying( 255 ) NOT NULL
 ;
-- -------------------------------------------------------------

-- CREATE TABLE "payment_methods" ------------------------------
CREATE TABLE IF NOT EXISTS payment_methods ( 
	"id" Bigint DEFAULT nextval('payment_methods_id_seq'::regclass) NOT NULL,
	"created_at" Timestamp( 0 ) Without Time Zone,
	"updated_at" Timestamp( 0 ) Without Time Zone,
	"payment_type" Character Varying( 255 ) NOT NULL,
	"card_payment_id" Integer NOT NULL
 ;
-- -------------------------------------------------------------


-- CREATE TABLE "purchase_orders" ------------------------------
CREATE TABLE IF NOT EXISTS purchase_orders ( 
	"id" Bigint DEFAULT nextval('purchase_orders_id_seq'::regclass) NOT NULL,
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
 ;
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

ALTER TABLE payment_methods
    ADD CONSTRAINT payment_methods_pkey
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
ALTER TABLE purchase_orders
	ADD CONSTRAINT purchase_orders_delivery_id_foreign 
	FOREIGN KEY ( delivery_id )
	REFERENCES deliveries ( "id" ) MATCH SIMPLE;
-- -------------------------------------------------------------

-- CREATE "payment_methods_card_payment_id_foreign" -------
ALTER TABLE payment_methods
	ADD CONSTRAINT payment_methods_card_payment_id_foreign 
	FOREIGN KEY ( card_payment_id )
	REFERENCES card_payments ( "id" ) MATCH SIMPLE;
-- -------------------------------------------------------------
