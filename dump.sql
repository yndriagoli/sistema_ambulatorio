--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: bitacora; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE bitacora (
    login character varying(50) NOT NULL,
    accion text NOT NULL,
    fecha_a integer NOT NULL,
    hora time without time zone NOT NULL,
    id_bita integer NOT NULL
);


ALTER TABLE bitacora OWNER TO postgres;

--
-- Name: bitacora_fecha_a_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE bitacora_fecha_a_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE bitacora_fecha_a_seq OWNER TO postgres;

--
-- Name: bitacora_fecha_a_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE bitacora_fecha_a_seq OWNED BY bitacora.fecha_a;


--
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuario (
    ci integer NOT NULL,
    privi character varying(30) NOT NULL,
    esta character varying(30) NOT NULL,
    log character varying(30) NOT NULL,
    clave character varying(50) NOT NULL,
    nom character varying(30),
    ape character varying(30),
    pre character varying(50),
    resp character varying(50)
);


ALTER TABLE usuario OWNER TO postgres;

--
-- Data for Name: bitacora; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY bitacora (login, accion, fecha_a, hora, id_bita) FROM stdin;
\.


--
-- Name: bitacora_fecha_a_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('bitacora_fecha_a_seq', 1, false);


--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY usuario (ci, privi, esta, log, clave, nom, ape, pre, resp) FROM stdin;
21539516	Administrador	Activo	pedro	39324adcde818a4effe83081a6c82d56	pedro	machado		
\.


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

