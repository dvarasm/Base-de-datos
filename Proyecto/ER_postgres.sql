--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: futbol; Type: SCHEMA; Schema: -; Owner: UbdIk
--

CREATE SCHEMA futbol;


ALTER SCHEMA futbol OWNER TO "UbdIk";

--
-- Name: SCHEMA futbol; Type: COMMENT; Schema: -; Owner: UbdIk
--

COMMENT ON SCHEMA futbol IS 'proyecto';


SET search_path = futbol, pg_catalog;

--
-- Name: agregar_premio(); Type: FUNCTION; Schema: futbol; Owner: UbdIk
--

CREATE FUNCTION agregar_premio() RETURNS trigger
    LANGUAGE plpgsql
    AS $$BEGIN

INSERT INTO futbol.premio(id_p,nombre_premio)VALUES((random()*7)+500,'Maximo goleador');

return null;
end;
$$;


ALTER FUNCTION futbol.agregar_premio() OWNER TO "UbdIk";

--
-- Name: insertar_estadistica(); Type: FUNCTION; Schema: futbol; Owner: UbdIk
--

CREATE FUNCTION insertar_estadistica() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
DECLARE BEGIN

INSERT INTO futbol.estadistica_j VALUES((random()*7) + 500,NEW.rut_j,NEW.id_equipo,1,0,0,0,0);

RETURN null;
END;
$$;


ALTER FUNCTION futbol.insertar_estadistica() OWNER TO "UbdIk";

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: administra; Type: TABLE; Schema: futbol; Owner: UbdIk; Tablespace: 
--

CREATE TABLE administra (
    rut_p character varying(30),
    id_equipo integer,
    ano_inicio_periodo integer
);


ALTER TABLE futbol.administra OWNER TO "UbdIk";

--
-- Name: equipo; Type: TABLE; Schema: futbol; Owner: UbdIk; Tablespace: 
--

CREATE TABLE equipo (
    id_equipo integer NOT NULL,
    nombre_e character varying(30),
    ciudad character varying(30),
    nombre_entrenador character varying(30),
    apellido_entrenador character varying(30),
    rut_p character varying(30)
);


ALTER TABLE futbol.equipo OWNER TO "UbdIk";

--
-- Name: estadistica_j; Type: TABLE; Schema: futbol; Owner: UbdIk; Tablespace: 
--

CREATE TABLE estadistica_j (
    id_e integer NOT NULL,
    rut_j character varying(30),
    id_equipo integer,
    id_t integer,
    cantidad_partidos_club integer,
    goles integer,
    tarjeta_a integer,
    tarjeta_r integer
);


ALTER TABLE futbol.estadistica_j OWNER TO "UbdIk";

--
-- Name: gana; Type: TABLE; Schema: futbol; Owner: UbdIk; Tablespace: 
--

CREATE TABLE gana (
    rut_j character varying(30),
    id_p integer,
    tipo character varying(30),
    id_t integer
);


ALTER TABLE futbol.gana OWNER TO "UbdIk";

--
-- Name: juega_s; Type: TABLE; Schema: futbol; Owner: UbdIk; Tablespace: 
--

CREATE TABLE juega_s (
    rut_j character varying(30),
    nombre_seleccion character varying(30),
    cantidad_partidos integer,
    goles integer,
    ano_debut integer
);


ALTER TABLE futbol.juega_s OWNER TO "UbdIk";

--
-- Name: juega_t; Type: TABLE; Schema: futbol; Owner: UbdIk; Tablespace: 
--

CREATE TABLE juega_t (
    id_t integer,
    rut_j character varying(30)
);


ALTER TABLE futbol.juega_t OWNER TO "UbdIk";

--
-- Name: jugador; Type: TABLE; Schema: futbol; Owner: UbdIk; Tablespace: 
--

CREATE TABLE jugador (
    rut_j character varying(30) NOT NULL,
    nombre_j character varying(30),
    apellido_j character varying(30),
    fecha_nacimiento character varying(30),
    pais character varying(30),
    posicion character varying(30),
    id_equipo integer
);


ALTER TABLE futbol.jugador OWNER TO "UbdIk";

--
-- Name: premio; Type: TABLE; Schema: futbol; Owner: UbdIk; Tablespace: 
--

CREATE TABLE premio (
    id_p integer NOT NULL,
    nombre_premio character varying(100)
);


ALTER TABLE futbol.premio OWNER TO "UbdIk";

--
-- Name: presidente; Type: TABLE; Schema: futbol; Owner: UbdIk; Tablespace: 
--

CREATE TABLE presidente (
    rut_p character varying(30) NOT NULL,
    nombre_p character varying(30),
    apellido_p character varying(30)
);


ALTER TABLE futbol.presidente OWNER TO "UbdIk";

--
-- Name: sancion; Type: TABLE; Schema: futbol; Owner: UbdIk; Tablespace: 
--

CREATE TABLE sancion (
    id_sancion integer NOT NULL,
    rut_j character varying(30),
    ano_s integer,
    tipo_sancion character varying(200),
    descripcion character varying(200),
    cantidad_partidos_sancionado integer
);


ALTER TABLE futbol.sancion OWNER TO "UbdIk";

--
-- Name: seleccion_nacional; Type: TABLE; Schema: futbol; Owner: UbdIk; Tablespace: 
--

CREATE TABLE seleccion_nacional (
    nombre_seleccion character varying(30) NOT NULL,
    nombre_entrenador_s character varying(30),
    apellido_entrenador_s character varying(30)
);


ALTER TABLE futbol.seleccion_nacional OWNER TO "UbdIk";

--
-- Name: torneo; Type: TABLE; Schema: futbol; Owner: UbdIk; Tablespace: 
--

CREATE TABLE torneo (
    id_t integer NOT NULL,
    nombre_t character varying(100),
    ano_t integer
);


ALTER TABLE futbol.torneo OWNER TO "UbdIk";

--
-- Name: equipo_pkey; Type: CONSTRAINT; Schema: futbol; Owner: UbdIk; Tablespace: 
--

ALTER TABLE ONLY equipo
    ADD CONSTRAINT equipo_pkey PRIMARY KEY (id_equipo);


--
-- Name: estadistica_j_pkey; Type: CONSTRAINT; Schema: futbol; Owner: UbdIk; Tablespace: 
--

ALTER TABLE ONLY estadistica_j
    ADD CONSTRAINT estadistica_j_pkey PRIMARY KEY (id_e);


--
-- Name: jugador_pkey; Type: CONSTRAINT; Schema: futbol; Owner: UbdIk; Tablespace: 
--

ALTER TABLE ONLY jugador
    ADD CONSTRAINT jugador_pkey PRIMARY KEY (rut_j);


--
-- Name: premio_pkey; Type: CONSTRAINT; Schema: futbol; Owner: UbdIk; Tablespace: 
--

ALTER TABLE ONLY premio
    ADD CONSTRAINT premio_pkey PRIMARY KEY (id_p);


--
-- Name: presidente_pkey; Type: CONSTRAINT; Schema: futbol; Owner: UbdIk; Tablespace: 
--

ALTER TABLE ONLY presidente
    ADD CONSTRAINT presidente_pkey PRIMARY KEY (rut_p);


--
-- Name: sancion_pkey; Type: CONSTRAINT; Schema: futbol; Owner: UbdIk; Tablespace: 
--

ALTER TABLE ONLY sancion
    ADD CONSTRAINT sancion_pkey PRIMARY KEY (id_sancion);


--
-- Name: seleccion_nacional_pkey; Type: CONSTRAINT; Schema: futbol; Owner: UbdIk; Tablespace: 
--

ALTER TABLE ONLY seleccion_nacional
    ADD CONSTRAINT seleccion_nacional_pkey PRIMARY KEY (nombre_seleccion);


--
-- Name: torneo_pkey; Type: CONSTRAINT; Schema: futbol; Owner: UbdIk; Tablespace: 
--

ALTER TABLE ONLY torneo
    ADD CONSTRAINT torneo_pkey PRIMARY KEY (id_t);


--
-- Name: agregar_premio; Type: TRIGGER; Schema: futbol; Owner: UbdIk
--

CREATE TRIGGER agregar_premio AFTER INSERT ON torneo FOR EACH ROW EXECUTE PROCEDURE agregar_premio();


--
-- Name: insertar; Type: TRIGGER; Schema: futbol; Owner: UbdIk
--

CREATE TRIGGER insertar AFTER INSERT ON jugador FOR EACH ROW EXECUTE PROCEDURE insertar_estadistica();


--
-- Name: administra_id_equipo_fkey; Type: FK CONSTRAINT; Schema: futbol; Owner: UbdIk
--

ALTER TABLE ONLY administra
    ADD CONSTRAINT administra_id_equipo_fkey FOREIGN KEY (id_equipo) REFERENCES equipo(id_equipo);


--
-- Name: administra_rut_p_fkey; Type: FK CONSTRAINT; Schema: futbol; Owner: UbdIk
--

ALTER TABLE ONLY administra
    ADD CONSTRAINT administra_rut_p_fkey FOREIGN KEY (rut_p) REFERENCES presidente(rut_p);


--
-- Name: equipo_rut_p_fkey; Type: FK CONSTRAINT; Schema: futbol; Owner: UbdIk
--

ALTER TABLE ONLY equipo
    ADD CONSTRAINT equipo_rut_p_fkey FOREIGN KEY (rut_p) REFERENCES presidente(rut_p);


--
-- Name: estadistica_j_id_equipo_fkey; Type: FK CONSTRAINT; Schema: futbol; Owner: UbdIk
--

ALTER TABLE ONLY estadistica_j
    ADD CONSTRAINT estadistica_j_id_equipo_fkey FOREIGN KEY (id_equipo) REFERENCES equipo(id_equipo);


--
-- Name: estadistica_j_id_t_fkey; Type: FK CONSTRAINT; Schema: futbol; Owner: UbdIk
--

ALTER TABLE ONLY estadistica_j
    ADD CONSTRAINT estadistica_j_id_t_fkey FOREIGN KEY (id_t) REFERENCES torneo(id_t);


--
-- Name: estadistica_j_rut_j_fkey; Type: FK CONSTRAINT; Schema: futbol; Owner: UbdIk
--

ALTER TABLE ONLY estadistica_j
    ADD CONSTRAINT estadistica_j_rut_j_fkey FOREIGN KEY (rut_j) REFERENCES jugador(rut_j);


--
-- Name: gana_id_p_fkey; Type: FK CONSTRAINT; Schema: futbol; Owner: UbdIk
--

ALTER TABLE ONLY gana
    ADD CONSTRAINT gana_id_p_fkey FOREIGN KEY (id_p) REFERENCES premio(id_p);


--
-- Name: gana_id_t_fkey; Type: FK CONSTRAINT; Schema: futbol; Owner: UbdIk
--

ALTER TABLE ONLY gana
    ADD CONSTRAINT gana_id_t_fkey FOREIGN KEY (id_t) REFERENCES torneo(id_t);


--
-- Name: gana_rut_j_fkey; Type: FK CONSTRAINT; Schema: futbol; Owner: UbdIk
--

ALTER TABLE ONLY gana
    ADD CONSTRAINT gana_rut_j_fkey FOREIGN KEY (rut_j) REFERENCES jugador(rut_j);


--
-- Name: juega_s_nombre_seleccion_fkey; Type: FK CONSTRAINT; Schema: futbol; Owner: UbdIk
--

ALTER TABLE ONLY juega_s
    ADD CONSTRAINT juega_s_nombre_seleccion_fkey FOREIGN KEY (nombre_seleccion) REFERENCES seleccion_nacional(nombre_seleccion);


--
-- Name: juega_s_rut_j_fkey; Type: FK CONSTRAINT; Schema: futbol; Owner: UbdIk
--

ALTER TABLE ONLY juega_s
    ADD CONSTRAINT juega_s_rut_j_fkey FOREIGN KEY (rut_j) REFERENCES jugador(rut_j);


--
-- Name: juega_t_id_t_fkey; Type: FK CONSTRAINT; Schema: futbol; Owner: UbdIk
--

ALTER TABLE ONLY juega_t
    ADD CONSTRAINT juega_t_id_t_fkey FOREIGN KEY (id_t) REFERENCES torneo(id_t);


--
-- Name: juega_t_rut_j_fkey; Type: FK CONSTRAINT; Schema: futbol; Owner: UbdIk
--

ALTER TABLE ONLY juega_t
    ADD CONSTRAINT juega_t_rut_j_fkey FOREIGN KEY (rut_j) REFERENCES jugador(rut_j);


--
-- Name: jugador_id_equipo_fkey; Type: FK CONSTRAINT; Schema: futbol; Owner: UbdIk
--

ALTER TABLE ONLY jugador
    ADD CONSTRAINT jugador_id_equipo_fkey FOREIGN KEY (id_equipo) REFERENCES equipo(id_equipo);


--
-- Name: sancion_rut_j_fkey; Type: FK CONSTRAINT; Schema: futbol; Owner: UbdIk
--

ALTER TABLE ONLY sancion
    ADD CONSTRAINT sancion_rut_j_fkey FOREIGN KEY (rut_j) REFERENCES jugador(rut_j);


--
-- PostgreSQL database dump complete
--

