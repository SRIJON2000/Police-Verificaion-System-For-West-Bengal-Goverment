PGDMP     ,    7    
            y            PVR    13.3    13.3 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    26113    PVR    DATABASE     a   CREATE DATABASE "PVR" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_India.1252';
    DROP DATABASE "PVR";
                postgres    false            �            1259    26114    pvr_audit_log    TABLE     f  CREATE TABLE public.pvr_audit_log (
    audit_id_pk bigint NOT NULL,
    section character varying(100) NOT NULL,
    action text NOT NULL,
    request character varying(200) NOT NULL,
    comment character varying(200) NOT NULL,
    ip_addr character varying(20) NOT NULL,
    login_id_fk bigint NOT NULL,
    "timestamp" time without time zone NOT NULL
);
 !   DROP TABLE public.pvr_audit_log;
       public         heap    postgres    false            �            1259    26120    pvr_candidate_details    TABLE     l  CREATE TABLE public.pvr_candidate_details (
    candidate_id_pk bigint NOT NULL,
    reference_no_fk bigint NOT NULL,
    employer_id_fk bigint NOT NULL,
    profile_id_fk bigint,
    candidate_f_name character varying(50) NOT NULL,
    candidate_m_name character varying(50) NOT NULL,
    candidate_l_name character varying(50) NOT NULL,
    candidate_gender_id_fk bigint NOT NULL,
    candidate_caste_id_fk bigint NOT NULL,
    candidate_aadhaar_no numeric(12,0) NOT NULL,
    candidate_house_no1 character varying(50) NOT NULL,
    candidate_street1 character varying(50) NOT NULL,
    candidate_landmark1 character varying(50) NOT NULL,
    candidate_city1 character varying NOT NULL,
    candidate_post_office1 character varying NOT NULL,
    candidate_police_station_id1_fk bigint NOT NULL,
    candidate_pin1_fk bigint NOT NULL,
    candidate_district_id1_fk bigint NOT NULL,
    candidate_photo_path character varying(80) NOT NULL,
    candidate_defence_type_id_fk bigint NOT NULL,
    candidate_house_no2 character varying NOT NULL,
    candidate_street2 character varying NOT NULL,
    candidate_landmark2 character varying NOT NULL,
    candidate_city2 character varying NOT NULL,
    candidate_post_office2 character varying NOT NULL,
    candidate_police_station_id2_fk bigint NOT NULL,
    candidate_pin2_fk bigint NOT NULL,
    candidate_district_id2_fk bigint NOT NULL
);
 )   DROP TABLE public.pvr_candidate_details;
       public         heap    postgres    false            �            1259    26126    pvr_candidate_profile    TABLE       CREATE TABLE public.pvr_candidate_profile (
    profile_id_pk bigint NOT NULL,
    candidate_father_name character varying(50) NOT NULL,
    candidate_mother_name character varying(50) NOT NULL,
    candidate_nationality character varying(50) NOT NULL,
    candidate_dob date NOT NULL,
    candidate_school_name character varying(80) NOT NULL,
    candidate_school_address character varying(100) NOT NULL,
    candidate_school_district_id_fk bigint NOT NULL,
    "candidate_college_name " character varying(50) NOT NULL,
    candidate_college_address character varying(100) NOT NULL,
    candidate_college_district_id_fk bigint NOT NULL,
    blood_group character varying NOT NULL,
    candidate_school_pin_id_fk bigint NOT NULL,
    candidate_college_pin_id_fk bigint NOT NULL
);
 )   DROP TABLE public.pvr_candidate_profile;
       public         heap    postgres    false            �            1259    26132    pvr_check_first_user    TABLE     �   CREATE TABLE public.pvr_check_first_user (
    user_id_pk bigint NOT NULL,
    check_if_first_user integer NOT NULL,
    check_profile_updated_once integer NOT NULL
);
 (   DROP TABLE public.pvr_check_first_user;
       public         heap    postgres    false            �            1259    26135    pvr_employer    TABLE     �   CREATE TABLE public.pvr_employer (
    employer_id_pk bigint NOT NULL,
    profile_id_fk bigint,
    employer_name character varying(50) NOT NULL,
    employer_add1 character varying(50) NOT NULL,
    employer_add2 character varying(50) NOT NULL
);
     DROP TABLE public.pvr_employer;
       public         heap    postgres    false            �            1259    26138    pvr_employer_profile    TABLE     �  CREATE TABLE public.pvr_employer_profile (
    profile_id_pk bigint NOT NULL,
    employer_district_id_fk bigint NOT NULL,
    employer_pincode_fk bigint NOT NULL,
    employer_type_id_fk bigint NOT NULL,
    employer_sender_name character varying(50) NOT NULL,
    employer_sender_designation character varying(50) NOT NULL,
    employer_email character varying(50) NOT NULL,
    employer_contact character varying(50) NOT NULL
);
 (   DROP TABLE public.pvr_employer_profile;
       public         heap    postgres    false            �            1259    26141    pvr_final_status    TABLE     �   CREATE TABLE public.pvr_final_status (
    pvr_final_status_id_pk bigint NOT NULL,
    pvr_id_fk bigint NOT NULL,
    final_status_name character varying(50) NOT NULL
);
 $   DROP TABLE public.pvr_final_status;
       public         heap    postgres    false            �            1259    26144 
   pvr_issues    TABLE     	  CREATE TABLE public.pvr_issues (
    issue_id_pk bigint NOT NULL,
    name "char" NOT NULL,
    email "char" NOT NULL,
    rating numeric NOT NULL,
    description text NOT NULL,
    timstamp timestamp without time zone NOT NULL,
    login_id_fk bigint NOT NULL
);
    DROP TABLE public.pvr_issues;
       public         heap    postgres    false            �            1259    26150 	   pvr_login    TABLE     j  CREATE TABLE public.pvr_login (
    username character varying(50) NOT NULL,
    password text NOT NULL,
    user_type_id_fk bigint NOT NULL,
    location_code character varying(12) NOT NULL,
    login_id_pk bigint NOT NULL,
    active_status numeric NOT NULL,
    dept_id_fk bigint NOT NULL,
    office_id_fk bigint NOT NULL,
    desig_id_fk bigint NOT NULL
);
    DROP TABLE public.pvr_login;
       public         heap    postgres    false            �            1259    26156    pvr_master_caste    TABLE     y   CREATE TABLE public.pvr_master_caste (
    caste_id_pk bigint NOT NULL,
    caste_name character varying(50) NOT NULL
);
 $   DROP TABLE public.pvr_master_caste;
       public         heap    postgres    false            �            1259    26159    pvr_master_defence    TABLE     z   CREATE TABLE public.pvr_master_defence (
    df_type_id_pk bigint NOT NULL,
    df_type character varying(50) NOT NULL
);
 &   DROP TABLE public.pvr_master_defence;
       public         heap    postgres    false            �            1259    26162    pvr_master_department    TABLE     �   CREATE TABLE public.pvr_master_department (
    dept_id_pk bigint NOT NULL,
    dept_name character varying(50) NOT NULL,
    short_name character varying(15) NOT NULL,
    office_id_fk bigint NOT NULL
);
 )   DROP TABLE public.pvr_master_department;
       public         heap    postgres    false            �            1259    26165    pvr_master_designation    TABLE     �   CREATE TABLE public.pvr_master_designation (
    desig_id_pk bigint NOT NULL,
    desig_name character varying(50) NOT NULL,
    dept_id_fk bigint NOT NULL
);
 *   DROP TABLE public.pvr_master_designation;
       public         heap    postgres    false            �            1259    26168    pvr_master_district    TABLE     �   CREATE TABLE public.pvr_master_district (
    district_id_pk bigint NOT NULL,
    district_name character varying(50) NOT NULL,
    state_id_fk bigint NOT NULL,
    dist_lg_code bigint
);
 '   DROP TABLE public.pvr_master_district;
       public         heap    postgres    false            �            1259    26171    pvr_master_employer_type    TABLE        CREATE TABLE public.pvr_master_employer_type (
    type_id_pk bigint NOT NULL,
    type_name character varying(50) NOT NULL
);
 ,   DROP TABLE public.pvr_master_employer_type;
       public         heap    postgres    false            �            1259    26174    pvr_master_gender    TABLE     |   CREATE TABLE public.pvr_master_gender (
    gender_id_pk bigint NOT NULL,
    gender_name character varying(20) NOT NULL
);
 %   DROP TABLE public.pvr_master_gender;
       public         heap    postgres    false            �            1259    26177    pvr_master_office    TABLE     �   CREATE TABLE public.pvr_master_office (
    office_id_pk bigint NOT NULL,
    office_name character varying(50) NOT NULL,
    district_id_fk bigint NOT NULL
);
 %   DROP TABLE public.pvr_master_office;
       public         heap    postgres    false            �            1259    26180    pvr_master_pincode    TABLE     �   CREATE TABLE public.pvr_master_pincode (
    pincode_id_pk bigint NOT NULL,
    pincode_no_pk bigint NOT NULL,
    district_id_fk bigint NOT NULL
);
 &   DROP TABLE public.pvr_master_pincode;
       public         heap    postgres    false            �            1259    26183    pvr_master_policestation    TABLE     �   CREATE TABLE public.pvr_master_policestation (
    ps_id_pk bigint NOT NULL,
    ps_name character varying(50) NOT NULL,
    district_id_fk bigint NOT NULL
);
 ,   DROP TABLE public.pvr_master_policestation;
       public         heap    postgres    false            �            1259    26186    pvr_master_state    TABLE     y   CREATE TABLE public.pvr_master_state (
    state_id_pk bigint NOT NULL,
    state_name character varying(50) NOT NULL
);
 $   DROP TABLE public.pvr_master_state;
       public         heap    postgres    false            �            1259    26189    pvr_memo    TABLE     �   CREATE TABLE public.pvr_memo (
    memo_id_pk bigint NOT NULL,
    memo_no character varying(50) NOT NULL,
    memo_issued_by_fk bigint NOT NULL,
    issue_date date NOT NULL
);
    DROP TABLE public.pvr_memo;
       public         heap    postgres    false            �            1259    26192    pvr_privilege    TABLE     '  CREATE TABLE public.pvr_privilege (
    privilege_id_pk bigint NOT NULL,
    "parent " integer NOT NULL,
    link character varying(70) NOT NULL,
    "order" integer NOT NULL,
    page_name character varying(70) NOT NULL,
    active_status numeric NOT NULL,
    view_sidebar numeric NOT NULL
);
 !   DROP TABLE public.pvr_privilege;
       public         heap    postgres    false            �            1259    26198    pvr_receipt_no    TABLE     g   CREATE TABLE public.pvr_receipt_no (
    receipt_no bigint NOT NULL,
    receipt_date date NOT NULL
);
 "   DROP TABLE public.pvr_receipt_no;
       public         heap    postgres    false            �            1259    26201    pvr_reference_no    TABLE     �   CREATE TABLE public.pvr_reference_no (
    ref_no_pk bigint NOT NULL,
    receipt_no_fk bigint NOT NULL,
    ref_date date NOT NULL
);
 $   DROP TABLE public.pvr_reference_no;
       public         heap    postgres    false            �            1259    26204 
   pvr_report    TABLE     .  CREATE TABLE public.pvr_report (
    pvr_report_id_pk bigint NOT NULL,
    ref_no_fk bigint NOT NULL,
    receipt_no_fk bigint NOT NULL,
    pvr_report_no character varying(50) NOT NULL,
    pvr_id_fk bigint NOT NULL,
    issue_date date NOT NULL,
    pvr_report_path character varying(60) NOT NULL
);
    DROP TABLE public.pvr_report;
       public         heap    postgres    false            �            1259    26207    pvr_user_privilege    TABLE     �   CREATE TABLE public.pvr_user_privilege (
    user_priv_id_pk bigint NOT NULL,
    privilege_id_fk bigint NOT NULL,
    active_status integer NOT NULL,
    user_type_id_fk bigint NOT NULL
);
 &   DROP TABLE public.pvr_user_privilege;
       public         heap    postgres    false            �            1259    26210    pvr_user_profile    TABLE     C  CREATE TABLE public.pvr_user_profile (
    profile_id_pk bigint NOT NULL,
    username character varying(50) NOT NULL,
    first_name character varying(50) NOT NULL,
    middle_name character varying(50) NOT NULL,
    last_name character varying(50) NOT NULL,
    mobille numeric(10,0) NOT NULL,
    "email " character varying(50) NOT NULL,
    district_id_fk bigint NOT NULL,
    designation_id_fk bigint NOT NULL,
    office_id_fk bigint NOT NULL,
    department_id_fk bigint NOT NULL,
    signature_path character varying(100) NOT NULL,
    user_type_id_fk bigint NOT NULL
);
 $   DROP TABLE public.pvr_user_profile;
       public         heap    postgres    false            �            1259    26213    pvr_user_type    TABLE     �   CREATE TABLE public.pvr_user_type (
    user_type_id_pk bigint NOT NULL,
    designation_id_fk bigint NOT NULL,
    active_status numeric NOT NULL,
    user_level integer NOT NULL
);
 !   DROP TABLE public.pvr_user_type;
       public         heap    postgres    false            �            1259    26219    pvr_vr_detail    TABLE     �  CREATE TABLE public.pvr_vr_detail (
    pvr_id_pk bigint NOT NULL,
    receipt_no_fk bigint NOT NULL,
    candidate_id_fk bigint NOT NULL,
    application_date date NOT NULL,
    pvr_type_fk bigint NOT NULL,
    pvr_sent_to_id_fk bigint NOT NULL,
    memo_id_fk bigint NOT NULL,
    pvr_with_id_fk bigint NOT NULL,
    pvr_final_status_id_fk bigint NOT NULL,
    remarks text NOT NULL,
    pvr_report_id_fk bigint NOT NULL
);
 !   DROP TABLE public.pvr_vr_detail;
       public         heap    postgres    false            �            1259    26225    pvr_with    TABLE     �   CREATE TABLE public.pvr_with (
    pvr_with_id_pk bigint NOT NULL,
    pvr_id_fk bigint NOT NULL,
    pvr_with_status character varying(50) NOT NULL,
    pvr_with_date date NOT NULL
);
    DROP TABLE public.pvr_with;
       public         heap    postgres    false            �          0    26114    pvr_audit_log 
   TABLE DATA           z   COPY public.pvr_audit_log (audit_id_pk, section, action, request, comment, ip_addr, login_id_fk, "timestamp") FROM stdin;
    public          postgres    false    200   a�       �          0    26120    pvr_candidate_details 
   TABLE DATA           �  COPY public.pvr_candidate_details (candidate_id_pk, reference_no_fk, employer_id_fk, profile_id_fk, candidate_f_name, candidate_m_name, candidate_l_name, candidate_gender_id_fk, candidate_caste_id_fk, candidate_aadhaar_no, candidate_house_no1, candidate_street1, candidate_landmark1, candidate_city1, candidate_post_office1, candidate_police_station_id1_fk, candidate_pin1_fk, candidate_district_id1_fk, candidate_photo_path, candidate_defence_type_id_fk, candidate_house_no2, candidate_street2, candidate_landmark2, candidate_city2, candidate_post_office2, candidate_police_station_id2_fk, candidate_pin2_fk, candidate_district_id2_fk) FROM stdin;
    public          postgres    false    201   ~�       �          0    26126    pvr_candidate_profile 
   TABLE DATA           �  COPY public.pvr_candidate_profile (profile_id_pk, candidate_father_name, candidate_mother_name, candidate_nationality, candidate_dob, candidate_school_name, candidate_school_address, candidate_school_district_id_fk, "candidate_college_name ", candidate_college_address, candidate_college_district_id_fk, blood_group, candidate_school_pin_id_fk, candidate_college_pin_id_fk) FROM stdin;
    public          postgres    false    202   ��       �          0    26132    pvr_check_first_user 
   TABLE DATA           k   COPY public.pvr_check_first_user (user_id_pk, check_if_first_user, check_profile_updated_once) FROM stdin;
    public          postgres    false    203   ��       �          0    26135    pvr_employer 
   TABLE DATA           r   COPY public.pvr_employer (employer_id_pk, profile_id_fk, employer_name, employer_add1, employer_add2) FROM stdin;
    public          postgres    false    204   ��       �          0    26138    pvr_employer_profile 
   TABLE DATA           �   COPY public.pvr_employer_profile (profile_id_pk, employer_district_id_fk, employer_pincode_fk, employer_type_id_fk, employer_sender_name, employer_sender_designation, employer_email, employer_contact) FROM stdin;
    public          postgres    false    205   ��       �          0    26141    pvr_final_status 
   TABLE DATA           `   COPY public.pvr_final_status (pvr_final_status_id_pk, pvr_id_fk, final_status_name) FROM stdin;
    public          postgres    false    206   �       �          0    26144 
   pvr_issues 
   TABLE DATA           j   COPY public.pvr_issues (issue_id_pk, name, email, rating, description, timstamp, login_id_fk) FROM stdin;
    public          postgres    false    207   ,�       �          0    26150 	   pvr_login 
   TABLE DATA           �   COPY public.pvr_login (username, password, user_type_id_fk, location_code, login_id_pk, active_status, dept_id_fk, office_id_fk, desig_id_fk) FROM stdin;
    public          postgres    false    208   I�       �          0    26156    pvr_master_caste 
   TABLE DATA           C   COPY public.pvr_master_caste (caste_id_pk, caste_name) FROM stdin;
    public          postgres    false    209   ��       �          0    26159    pvr_master_defence 
   TABLE DATA           D   COPY public.pvr_master_defence (df_type_id_pk, df_type) FROM stdin;
    public          postgres    false    210   �       �          0    26162    pvr_master_department 
   TABLE DATA           `   COPY public.pvr_master_department (dept_id_pk, dept_name, short_name, office_id_fk) FROM stdin;
    public          postgres    false    211   b�       �          0    26165    pvr_master_designation 
   TABLE DATA           U   COPY public.pvr_master_designation (desig_id_pk, desig_name, dept_id_fk) FROM stdin;
    public          postgres    false    212   ��       �          0    26168    pvr_master_district 
   TABLE DATA           g   COPY public.pvr_master_district (district_id_pk, district_name, state_id_fk, dist_lg_code) FROM stdin;
    public          postgres    false    213   
�       �          0    26171    pvr_master_employer_type 
   TABLE DATA           I   COPY public.pvr_master_employer_type (type_id_pk, type_name) FROM stdin;
    public          postgres    false    214   v       �          0    26174    pvr_master_gender 
   TABLE DATA           F   COPY public.pvr_master_gender (gender_id_pk, gender_name) FROM stdin;
    public          postgres    false    215   �       �          0    26177    pvr_master_office 
   TABLE DATA           V   COPY public.pvr_master_office (office_id_pk, office_name, district_id_fk) FROM stdin;
    public          postgres    false    216   �       �          0    26180    pvr_master_pincode 
   TABLE DATA           Z   COPY public.pvr_master_pincode (pincode_id_pk, pincode_no_pk, district_id_fk) FROM stdin;
    public          postgres    false    217         �          0    26183    pvr_master_policestation 
   TABLE DATA           U   COPY public.pvr_master_policestation (ps_id_pk, ps_name, district_id_fk) FROM stdin;
    public          postgres    false    218   4      �          0    26186    pvr_master_state 
   TABLE DATA           C   COPY public.pvr_master_state (state_id_pk, state_name) FROM stdin;
    public          postgres    false    219   M      �          0    26189    pvr_memo 
   TABLE DATA           V   COPY public.pvr_memo (memo_id_pk, memo_no, memo_issued_by_fk, issue_date) FROM stdin;
    public          postgres    false    220   �      �          0    26192    pvr_privilege 
   TABLE DATA           z   COPY public.pvr_privilege (privilege_id_pk, "parent ", link, "order", page_name, active_status, view_sidebar) FROM stdin;
    public          postgres    false    221   �      �          0    26198    pvr_receipt_no 
   TABLE DATA           B   COPY public.pvr_receipt_no (receipt_no, receipt_date) FROM stdin;
    public          postgres    false    222   �      �          0    26201    pvr_reference_no 
   TABLE DATA           N   COPY public.pvr_reference_no (ref_no_pk, receipt_no_fk, ref_date) FROM stdin;
    public          postgres    false    223         �          0    26204 
   pvr_report 
   TABLE DATA           �   COPY public.pvr_report (pvr_report_id_pk, ref_no_fk, receipt_no_fk, pvr_report_no, pvr_id_fk, issue_date, pvr_report_path) FROM stdin;
    public          postgres    false    224   1      �          0    26207    pvr_user_privilege 
   TABLE DATA           n   COPY public.pvr_user_privilege (user_priv_id_pk, privilege_id_fk, active_status, user_type_id_fk) FROM stdin;
    public          postgres    false    225   N      �          0    26210    pvr_user_profile 
   TABLE DATA           �   COPY public.pvr_user_profile (profile_id_pk, username, first_name, middle_name, last_name, mobille, "email ", district_id_fk, designation_id_fk, office_id_fk, department_id_fk, signature_path, user_type_id_fk) FROM stdin;
    public          postgres    false    226   p      �          0    26213    pvr_user_type 
   TABLE DATA           f   COPY public.pvr_user_type (user_type_id_pk, designation_id_fk, active_status, user_level) FROM stdin;
    public          postgres    false    227   �      �          0    26219    pvr_vr_detail 
   TABLE DATA           �   COPY public.pvr_vr_detail (pvr_id_pk, receipt_no_fk, candidate_id_fk, application_date, pvr_type_fk, pvr_sent_to_id_fk, memo_id_fk, pvr_with_id_fk, pvr_final_status_id_fk, remarks, pvr_report_id_fk) FROM stdin;
    public          postgres    false    228   �      �          0    26225    pvr_with 
   TABLE DATA           ]   COPY public.pvr_with (pvr_with_id_pk, pvr_id_fk, pvr_with_status, pvr_with_date) FROM stdin;
    public          postgres    false    229         �           2606    26229     pvr_audit_log pvr_audit_log_pkey 
   CONSTRAINT     g   ALTER TABLE ONLY public.pvr_audit_log
    ADD CONSTRAINT pvr_audit_log_pkey PRIMARY KEY (audit_id_pk);
 J   ALTER TABLE ONLY public.pvr_audit_log DROP CONSTRAINT pvr_audit_log_pkey;
       public            postgres    false    200            �           2606    26231 0   pvr_candidate_details pvr_candidate_details_pkey 
   CONSTRAINT     {   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_pkey PRIMARY KEY (candidate_id_pk);
 Z   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_pkey;
       public            postgres    false    201            �           2606    26233 0   pvr_candidate_profile pvr_candidate_profile_pkey 
   CONSTRAINT     y   ALTER TABLE ONLY public.pvr_candidate_profile
    ADD CONSTRAINT pvr_candidate_profile_pkey PRIMARY KEY (profile_id_pk);
 Z   ALTER TABLE ONLY public.pvr_candidate_profile DROP CONSTRAINT pvr_candidate_profile_pkey;
       public            postgres    false    202            �           2606    26235 .   pvr_check_first_user pvr_check_first_user_pkey 
   CONSTRAINT     t   ALTER TABLE ONLY public.pvr_check_first_user
    ADD CONSTRAINT pvr_check_first_user_pkey PRIMARY KEY (user_id_pk);
 X   ALTER TABLE ONLY public.pvr_check_first_user DROP CONSTRAINT pvr_check_first_user_pkey;
       public            postgres    false    203            �           2606    26237    pvr_employer pvr_employer_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.pvr_employer
    ADD CONSTRAINT pvr_employer_pkey PRIMARY KEY (employer_id_pk);
 H   ALTER TABLE ONLY public.pvr_employer DROP CONSTRAINT pvr_employer_pkey;
       public            postgres    false    204            �           2606    26239 .   pvr_employer_profile pvr_employer_profile_pkey 
   CONSTRAINT     w   ALTER TABLE ONLY public.pvr_employer_profile
    ADD CONSTRAINT pvr_employer_profile_pkey PRIMARY KEY (profile_id_pk);
 X   ALTER TABLE ONLY public.pvr_employer_profile DROP CONSTRAINT pvr_employer_profile_pkey;
       public            postgres    false    205            �           2606    26241 &   pvr_final_status pvr_final_status_pkey 
   CONSTRAINT     x   ALTER TABLE ONLY public.pvr_final_status
    ADD CONSTRAINT pvr_final_status_pkey PRIMARY KEY (pvr_final_status_id_pk);
 P   ALTER TABLE ONLY public.pvr_final_status DROP CONSTRAINT pvr_final_status_pkey;
       public            postgres    false    206            �           2606    26243    pvr_issues pvr_issues_pkey 
   CONSTRAINT     a   ALTER TABLE ONLY public.pvr_issues
    ADD CONSTRAINT pvr_issues_pkey PRIMARY KEY (issue_id_pk);
 D   ALTER TABLE ONLY public.pvr_issues DROP CONSTRAINT pvr_issues_pkey;
       public            postgres    false    207            �           2606    26245    pvr_login pvr_login_pkey 
   CONSTRAINT     _   ALTER TABLE ONLY public.pvr_login
    ADD CONSTRAINT pvr_login_pkey PRIMARY KEY (login_id_pk);
 B   ALTER TABLE ONLY public.pvr_login DROP CONSTRAINT pvr_login_pkey;
       public            postgres    false    208            �           2606    26247 &   pvr_master_caste pvr_master_caste_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.pvr_master_caste
    ADD CONSTRAINT pvr_master_caste_pkey PRIMARY KEY (caste_id_pk);
 P   ALTER TABLE ONLY public.pvr_master_caste DROP CONSTRAINT pvr_master_caste_pkey;
       public            postgres    false    209            �           2606    26249 *   pvr_master_defence pvr_master_defence_pkey 
   CONSTRAINT     s   ALTER TABLE ONLY public.pvr_master_defence
    ADD CONSTRAINT pvr_master_defence_pkey PRIMARY KEY (df_type_id_pk);
 T   ALTER TABLE ONLY public.pvr_master_defence DROP CONSTRAINT pvr_master_defence_pkey;
       public            postgres    false    210            �           2606    26251 0   pvr_master_department pvr_master_department_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.pvr_master_department
    ADD CONSTRAINT pvr_master_department_pkey PRIMARY KEY (dept_id_pk);
 Z   ALTER TABLE ONLY public.pvr_master_department DROP CONSTRAINT pvr_master_department_pkey;
       public            postgres    false    211            �           2606    26253 2   pvr_master_designation pvr_master_designation_pkey 
   CONSTRAINT     y   ALTER TABLE ONLY public.pvr_master_designation
    ADD CONSTRAINT pvr_master_designation_pkey PRIMARY KEY (desig_id_pk);
 \   ALTER TABLE ONLY public.pvr_master_designation DROP CONSTRAINT pvr_master_designation_pkey;
       public            postgres    false    212            �           2606    26255 ,   pvr_master_district pvr_master_district_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.pvr_master_district
    ADD CONSTRAINT pvr_master_district_pkey PRIMARY KEY (district_id_pk);
 V   ALTER TABLE ONLY public.pvr_master_district DROP CONSTRAINT pvr_master_district_pkey;
       public            postgres    false    213            �           2606    26257 6   pvr_master_employer_type pvr_master_employer_type_pkey 
   CONSTRAINT     |   ALTER TABLE ONLY public.pvr_master_employer_type
    ADD CONSTRAINT pvr_master_employer_type_pkey PRIMARY KEY (type_id_pk);
 `   ALTER TABLE ONLY public.pvr_master_employer_type DROP CONSTRAINT pvr_master_employer_type_pkey;
       public            postgres    false    214            �           2606    26259 (   pvr_master_gender pvr_master_gender_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.pvr_master_gender
    ADD CONSTRAINT pvr_master_gender_pkey PRIMARY KEY (gender_id_pk);
 R   ALTER TABLE ONLY public.pvr_master_gender DROP CONSTRAINT pvr_master_gender_pkey;
       public            postgres    false    215            �           2606    26261 (   pvr_master_office pvr_master_office_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.pvr_master_office
    ADD CONSTRAINT pvr_master_office_pkey PRIMARY KEY (office_id_pk);
 R   ALTER TABLE ONLY public.pvr_master_office DROP CONSTRAINT pvr_master_office_pkey;
       public            postgres    false    216            �           2606    26263 *   pvr_master_pincode pvr_master_pincode_pkey 
   CONSTRAINT     s   ALTER TABLE ONLY public.pvr_master_pincode
    ADD CONSTRAINT pvr_master_pincode_pkey PRIMARY KEY (pincode_id_pk);
 T   ALTER TABLE ONLY public.pvr_master_pincode DROP CONSTRAINT pvr_master_pincode_pkey;
       public            postgres    false    217            �           2606    26265 6   pvr_master_policestation pvr_master_policestation_pkey 
   CONSTRAINT     z   ALTER TABLE ONLY public.pvr_master_policestation
    ADD CONSTRAINT pvr_master_policestation_pkey PRIMARY KEY (ps_id_pk);
 `   ALTER TABLE ONLY public.pvr_master_policestation DROP CONSTRAINT pvr_master_policestation_pkey;
       public            postgres    false    218            �           2606    26267 &   pvr_master_state pvr_master_state_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.pvr_master_state
    ADD CONSTRAINT pvr_master_state_pkey PRIMARY KEY (state_id_pk);
 P   ALTER TABLE ONLY public.pvr_master_state DROP CONSTRAINT pvr_master_state_pkey;
       public            postgres    false    219            �           2606    26269    pvr_memo pvr_memo_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.pvr_memo
    ADD CONSTRAINT pvr_memo_pkey PRIMARY KEY (memo_id_pk);
 @   ALTER TABLE ONLY public.pvr_memo DROP CONSTRAINT pvr_memo_pkey;
       public            postgres    false    220            �           2606    26271     pvr_privilege pvr_privilege_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.pvr_privilege
    ADD CONSTRAINT pvr_privilege_pkey PRIMARY KEY (privilege_id_pk);
 J   ALTER TABLE ONLY public.pvr_privilege DROP CONSTRAINT pvr_privilege_pkey;
       public            postgres    false    221            �           2606    26273 "   pvr_receipt_no pvr_receipt_no_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.pvr_receipt_no
    ADD CONSTRAINT pvr_receipt_no_pkey PRIMARY KEY (receipt_no);
 L   ALTER TABLE ONLY public.pvr_receipt_no DROP CONSTRAINT pvr_receipt_no_pkey;
       public            postgres    false    222            �           2606    26275 &   pvr_reference_no pvr_reference_no_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.pvr_reference_no
    ADD CONSTRAINT pvr_reference_no_pkey PRIMARY KEY (ref_no_pk);
 P   ALTER TABLE ONLY public.pvr_reference_no DROP CONSTRAINT pvr_reference_no_pkey;
       public            postgres    false    223            �           2606    26277    pvr_report pvr_report_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.pvr_report
    ADD CONSTRAINT pvr_report_pkey PRIMARY KEY (pvr_report_id_pk);
 D   ALTER TABLE ONLY public.pvr_report DROP CONSTRAINT pvr_report_pkey;
       public            postgres    false    224            �           2606    26279 *   pvr_user_privilege pvr_user_privilege_pkey 
   CONSTRAINT     u   ALTER TABLE ONLY public.pvr_user_privilege
    ADD CONSTRAINT pvr_user_privilege_pkey PRIMARY KEY (user_priv_id_pk);
 T   ALTER TABLE ONLY public.pvr_user_privilege DROP CONSTRAINT pvr_user_privilege_pkey;
       public            postgres    false    225            �           2606    26281 &   pvr_user_profile pvr_user_profile_pkey 
   CONSTRAINT     o   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_pkey PRIMARY KEY (profile_id_pk);
 P   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_pkey;
       public            postgres    false    226            �           2606    26283     pvr_user_type pvr_user_type_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.pvr_user_type
    ADD CONSTRAINT pvr_user_type_pkey PRIMARY KEY (user_type_id_pk);
 J   ALTER TABLE ONLY public.pvr_user_type DROP CONSTRAINT pvr_user_type_pkey;
       public            postgres    false    227            �           2606    26285     pvr_vr_detail pvr_vr_detail_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pkey PRIMARY KEY (pvr_id_pk);
 J   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pkey;
       public            postgres    false    228            �           2606    26287    pvr_with pvr_with_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.pvr_with
    ADD CONSTRAINT pvr_with_pkey PRIMARY KEY (pvr_with_id_pk);
 @   ALTER TABLE ONLY public.pvr_with DROP CONSTRAINT pvr_with_pkey;
       public            postgres    false    229            �           2606    26288 ,   pvr_audit_log pvr_audit_log_login_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_audit_log
    ADD CONSTRAINT pvr_audit_log_login_id_fk_fkey FOREIGN KEY (login_id_fk) REFERENCES public.pvr_login(login_id_pk) NOT VALID;
 V   ALTER TABLE ONLY public.pvr_audit_log DROP CONSTRAINT pvr_audit_log_login_id_fk_fkey;
       public          postgres    false    2989    208    200            �           2606    26293 F   pvr_candidate_details pvr_candidate_details_candidate_caste_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_caste_id_fk_fkey FOREIGN KEY (candidate_caste_id_fk) REFERENCES public.pvr_master_caste(caste_id_pk) NOT VALID;
 p   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_caste_id_fk_fkey;
       public          postgres    false    201    209    2991            �           2606    26298 M   pvr_candidate_details pvr_candidate_details_candidate_defence_type_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_defence_type_id_fk_fkey FOREIGN KEY (candidate_defence_type_id_fk) REFERENCES public.pvr_master_defence(df_type_id_pk) NOT VALID;
 w   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_defence_type_id_fk_fkey;
       public          postgres    false    2993    210    201            �           2606    26303 J   pvr_candidate_details pvr_candidate_details_candidate_district_id1_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_district_id1_fk_fkey FOREIGN KEY (candidate_district_id1_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 t   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_district_id1_fk_fkey;
       public          postgres    false    213    2999    201            �           2606    26308 J   pvr_candidate_details pvr_candidate_details_candidate_district_id2_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_district_id2_fk_fkey FOREIGN KEY (candidate_district_id2_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 t   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_district_id2_fk_fkey;
       public          postgres    false    2999    213    201            �           2606    26313 G   pvr_candidate_details pvr_candidate_details_candidate_gender_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_gender_id_fk_fkey FOREIGN KEY (candidate_gender_id_fk) REFERENCES public.pvr_master_gender(gender_id_pk) NOT VALID;
 q   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_gender_id_fk_fkey;
       public          postgres    false    3003    201    215            �           2606    26318 B   pvr_candidate_details pvr_candidate_details_candidate_pin1_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_pin1_fk_fkey FOREIGN KEY (candidate_pin1_fk) REFERENCES public.pvr_master_pincode(pincode_id_pk) NOT VALID;
 l   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_pin1_fk_fkey;
       public          postgres    false    217    3007    201            �           2606    26323 B   pvr_candidate_details pvr_candidate_details_candidate_pin2_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_pin2_fk_fkey FOREIGN KEY (candidate_pin2_fk) REFERENCES public.pvr_master_pincode(pincode_id_pk) NOT VALID;
 l   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_pin2_fk_fkey;
       public          postgres    false    3007    217    201            �           2606    26328 P   pvr_candidate_details pvr_candidate_details_candidate_police_station_id1_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_police_station_id1_fk_fkey FOREIGN KEY (candidate_police_station_id1_fk) REFERENCES public.pvr_master_policestation(ps_id_pk) NOT VALID;
 z   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_police_station_id1_fk_fkey;
       public          postgres    false    218    3009    201            �           2606    26333 P   pvr_candidate_details pvr_candidate_details_candidate_police_station_id2_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_police_station_id2_fk_fkey FOREIGN KEY (candidate_police_station_id2_fk) REFERENCES public.pvr_master_policestation(ps_id_pk) NOT VALID;
 z   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_police_station_id2_fk_fkey;
       public          postgres    false    201    218    3009            �           2606    26338 ?   pvr_candidate_details pvr_candidate_details_employer_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_employer_id_fk_fkey FOREIGN KEY (employer_id_fk) REFERENCES public.pvr_employer(employer_id_pk) NOT VALID;
 i   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_employer_id_fk_fkey;
       public          postgres    false    2981    201    204            �           2606    26343 >   pvr_candidate_details pvr_candidate_details_profile_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_profile_id_fk_fkey FOREIGN KEY (profile_id_fk) REFERENCES public.pvr_candidate_profile(profile_id_pk) NOT VALID;
 h   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_profile_id_fk_fkey;
       public          postgres    false    201    2977    202            �           2606    26348 @   pvr_candidate_details pvr_candidate_details_reference_no_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_reference_no_fk_fkey FOREIGN KEY (reference_no_fk) REFERENCES public.pvr_reference_no(ref_no_pk) NOT VALID;
 j   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_reference_no_fk_fkey;
       public          postgres    false    3019    223    201            �           2606    26353 9   pvr_check_first_user pvr_check_first_user_user_id_pk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_check_first_user
    ADD CONSTRAINT pvr_check_first_user_user_id_pk_fkey FOREIGN KEY (user_id_pk) REFERENCES public.pvr_login(login_id_pk) NOT VALID;
 c   ALTER TABLE ONLY public.pvr_check_first_user DROP CONSTRAINT pvr_check_first_user_user_id_pk_fkey;
       public          postgres    false    203    2989    208            �           2606    26358 F   pvr_employer_profile pvr_employer_profile_employer_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_employer_profile
    ADD CONSTRAINT pvr_employer_profile_employer_district_id_fk_fkey FOREIGN KEY (employer_district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 p   ALTER TABLE ONLY public.pvr_employer_profile DROP CONSTRAINT pvr_employer_profile_employer_district_id_fk_fkey;
       public          postgres    false    213    205    2999            �           2606    26363 B   pvr_employer_profile pvr_employer_profile_employer_pincode_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_employer_profile
    ADD CONSTRAINT pvr_employer_profile_employer_pincode_fk_fkey FOREIGN KEY (employer_pincode_fk) REFERENCES public.pvr_master_pincode(pincode_id_pk) NOT VALID;
 l   ALTER TABLE ONLY public.pvr_employer_profile DROP CONSTRAINT pvr_employer_profile_employer_pincode_fk_fkey;
       public          postgres    false    3007    205    217            �           2606    26368 B   pvr_employer_profile pvr_employer_profile_employer_type_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_employer_profile
    ADD CONSTRAINT pvr_employer_profile_employer_type_id_fk_fkey FOREIGN KEY (employer_type_id_fk) REFERENCES public.pvr_master_employer_type(type_id_pk) NOT VALID;
 l   ALTER TABLE ONLY public.pvr_employer_profile DROP CONSTRAINT pvr_employer_profile_employer_type_id_fk_fkey;
       public          postgres    false    3001    205    214            �           2606    26373 ,   pvr_employer pvr_employer_profile_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_employer
    ADD CONSTRAINT pvr_employer_profile_id_fk_fkey FOREIGN KEY (profile_id_fk) REFERENCES public.pvr_employer_profile(profile_id_pk) NOT VALID;
 V   ALTER TABLE ONLY public.pvr_employer DROP CONSTRAINT pvr_employer_profile_id_fk_fkey;
       public          postgres    false    204    205    2983            �           2606    26378 0   pvr_final_status pvr_final_status_pvr_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_final_status
    ADD CONSTRAINT pvr_final_status_pvr_id_fk_fkey FOREIGN KEY (pvr_id_fk) REFERENCES public.pvr_vr_detail(pvr_id_pk) NOT VALID;
 Z   ALTER TABLE ONLY public.pvr_final_status DROP CONSTRAINT pvr_final_status_pvr_id_fk_fkey;
       public          postgres    false    206    228    3029            �           2606    26383 &   pvr_issues pvr_issues_login_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_issues
    ADD CONSTRAINT pvr_issues_login_id_fk_fkey FOREIGN KEY (login_id_fk) REFERENCES public.pvr_login(login_id_pk) NOT VALID;
 P   ALTER TABLE ONLY public.pvr_issues DROP CONSTRAINT pvr_issues_login_id_fk_fkey;
       public          postgres    false    207    2989    208            �           2606    26388 #   pvr_login pvr_login_dept_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_login
    ADD CONSTRAINT pvr_login_dept_id_fk_fkey FOREIGN KEY (dept_id_fk) REFERENCES public.pvr_master_department(dept_id_pk) NOT VALID;
 M   ALTER TABLE ONLY public.pvr_login DROP CONSTRAINT pvr_login_dept_id_fk_fkey;
       public          postgres    false    2995    211    208            �           2606    26393 $   pvr_login pvr_login_desig_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_login
    ADD CONSTRAINT pvr_login_desig_id_fk_fkey FOREIGN KEY (desig_id_fk) REFERENCES public.pvr_master_designation(desig_id_pk) NOT VALID;
 N   ALTER TABLE ONLY public.pvr_login DROP CONSTRAINT pvr_login_desig_id_fk_fkey;
       public          postgres    false    208    2997    212            �           2606    26398 %   pvr_login pvr_login_office_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_login
    ADD CONSTRAINT pvr_login_office_id_fk_fkey FOREIGN KEY (office_id_fk) REFERENCES public.pvr_master_office(office_id_pk) NOT VALID;
 O   ALTER TABLE ONLY public.pvr_login DROP CONSTRAINT pvr_login_office_id_fk_fkey;
       public          postgres    false    208    216    3005            �           2606    26403 (   pvr_login pvr_login_user_type_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_login
    ADD CONSTRAINT pvr_login_user_type_id_fk_fkey FOREIGN KEY (user_type_id_fk) REFERENCES public.pvr_user_type(user_type_id_pk) NOT VALID;
 R   ALTER TABLE ONLY public.pvr_login DROP CONSTRAINT pvr_login_user_type_id_fk_fkey;
       public          postgres    false    3027    227    208            �           2606    26408 =   pvr_master_department pvr_master_department_office_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_department
    ADD CONSTRAINT pvr_master_department_office_id_fk_fkey FOREIGN KEY (office_id_fk) REFERENCES public.pvr_master_office(office_id_pk) NOT VALID;
 g   ALTER TABLE ONLY public.pvr_master_department DROP CONSTRAINT pvr_master_department_office_id_fk_fkey;
       public          postgres    false    211    3005    216            �           2606    26413 =   pvr_master_designation pvr_master_designation_dept_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_designation
    ADD CONSTRAINT pvr_master_designation_dept_id_fk_fkey FOREIGN KEY (dept_id_fk) REFERENCES public.pvr_master_department(dept_id_pk) NOT VALID;
 g   ALTER TABLE ONLY public.pvr_master_designation DROP CONSTRAINT pvr_master_designation_dept_id_fk_fkey;
       public          postgres    false    211    2995    212            �           2606    26418 8   pvr_master_district pvr_master_district_state_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_district
    ADD CONSTRAINT pvr_master_district_state_id_fk_fkey FOREIGN KEY (state_id_fk) REFERENCES public.pvr_master_state(state_id_pk) NOT VALID;
 b   ALTER TABLE ONLY public.pvr_master_district DROP CONSTRAINT pvr_master_district_state_id_fk_fkey;
       public          postgres    false    3011    213    219            �           2606    26423 7   pvr_master_office pvr_master_office_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_office
    ADD CONSTRAINT pvr_master_office_district_id_fk_fkey FOREIGN KEY (district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 a   ALTER TABLE ONLY public.pvr_master_office DROP CONSTRAINT pvr_master_office_district_id_fk_fkey;
       public          postgres    false    2999    213    216            �           2606    26428 9   pvr_master_pincode pvr_master_pincode_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_pincode
    ADD CONSTRAINT pvr_master_pincode_district_id_fk_fkey FOREIGN KEY (district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 c   ALTER TABLE ONLY public.pvr_master_pincode DROP CONSTRAINT pvr_master_pincode_district_id_fk_fkey;
       public          postgres    false    217    2999    213            �           2606    26433 E   pvr_master_policestation pvr_master_policestation_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_policestation
    ADD CONSTRAINT pvr_master_policestation_district_id_fk_fkey FOREIGN KEY (district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 o   ALTER TABLE ONLY public.pvr_master_policestation DROP CONSTRAINT pvr_master_policestation_district_id_fk_fkey;
       public          postgres    false    2999    213    218            �           2606    26438 (   pvr_memo pvr_memo_memo_issued_by_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_memo
    ADD CONSTRAINT pvr_memo_memo_issued_by_fk_fkey FOREIGN KEY (memo_issued_by_fk) REFERENCES public.pvr_user_profile(profile_id_pk) NOT VALID;
 R   ALTER TABLE ONLY public.pvr_memo DROP CONSTRAINT pvr_memo_memo_issued_by_fk_fkey;
       public          postgres    false    220    226    3025            �           2606    26443 4   pvr_reference_no pvr_reference_no_receipt_no_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_reference_no
    ADD CONSTRAINT pvr_reference_no_receipt_no_fk_fkey FOREIGN KEY (receipt_no_fk) REFERENCES public.pvr_receipt_no(receipt_no) NOT VALID;
 ^   ALTER TABLE ONLY public.pvr_reference_no DROP CONSTRAINT pvr_reference_no_receipt_no_fk_fkey;
       public          postgres    false    3017    222    223            �           2606    26448 $   pvr_report pvr_report_pvr_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_report
    ADD CONSTRAINT pvr_report_pvr_id_fk_fkey FOREIGN KEY (pvr_id_fk) REFERENCES public.pvr_vr_detail(pvr_id_pk) NOT VALID;
 N   ALTER TABLE ONLY public.pvr_report DROP CONSTRAINT pvr_report_pvr_id_fk_fkey;
       public          postgres    false    224    228    3029            �           2606    26453 (   pvr_report pvr_report_receipt_no_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_report
    ADD CONSTRAINT pvr_report_receipt_no_fk_fkey FOREIGN KEY (receipt_no_fk) REFERENCES public.pvr_receipt_no(receipt_no) NOT VALID;
 R   ALTER TABLE ONLY public.pvr_report DROP CONSTRAINT pvr_report_receipt_no_fk_fkey;
       public          postgres    false    3017    222    224            �           2606    26458 $   pvr_report pvr_report_ref_no_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_report
    ADD CONSTRAINT pvr_report_ref_no_fk_fkey FOREIGN KEY (ref_no_fk) REFERENCES public.pvr_reference_no(ref_no_pk) NOT VALID;
 N   ALTER TABLE ONLY public.pvr_report DROP CONSTRAINT pvr_report_ref_no_fk_fkey;
       public          postgres    false    223    224    3019            �           2606    26463 :   pvr_user_privilege pvr_user_privilege_privilege_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_privilege
    ADD CONSTRAINT pvr_user_privilege_privilege_id_fk_fkey FOREIGN KEY (privilege_id_fk) REFERENCES public.pvr_privilege(privilege_id_pk) NOT VALID;
 d   ALTER TABLE ONLY public.pvr_user_privilege DROP CONSTRAINT pvr_user_privilege_privilege_id_fk_fkey;
       public          postgres    false    3015    225    221            �           2606    26468 :   pvr_user_privilege pvr_user_privilege_user_type_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_privilege
    ADD CONSTRAINT pvr_user_privilege_user_type_id_fk_fkey FOREIGN KEY (user_type_id_fk) REFERENCES public.pvr_user_type(user_type_id_pk) NOT VALID;
 d   ALTER TABLE ONLY public.pvr_user_privilege DROP CONSTRAINT pvr_user_privilege_user_type_id_fk_fkey;
       public          postgres    false    227    225    3027            �           2606    26473 7   pvr_user_profile pvr_user_profile_department_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_department_id_fk_fkey FOREIGN KEY (department_id_fk) REFERENCES public.pvr_master_department(dept_id_pk) NOT VALID;
 a   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_department_id_fk_fkey;
       public          postgres    false    211    226    2995            �           2606    26478 8   pvr_user_profile pvr_user_profile_designation_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_designation_id_fk_fkey FOREIGN KEY (designation_id_fk) REFERENCES public.pvr_master_designation(desig_id_pk) NOT VALID;
 b   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_designation_id_fk_fkey;
       public          postgres    false    212    226    2997            �           2606    26483 5   pvr_user_profile pvr_user_profile_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_district_id_fk_fkey FOREIGN KEY (district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 _   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_district_id_fk_fkey;
       public          postgres    false    213    2999    226                        2606    26488 3   pvr_user_profile pvr_user_profile_office_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_office_id_fk_fkey FOREIGN KEY (office_id_fk) REFERENCES public.pvr_master_office(office_id_pk) NOT VALID;
 ]   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_office_id_fk_fkey;
       public          postgres    false    226    3005    216                       2606    26493 6   pvr_user_profile pvr_user_profile_user_type_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_user_type_id_fk_fkey FOREIGN KEY (user_type_id_fk) REFERENCES public.pvr_user_type(user_type_id_pk) NOT VALID;
 `   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_user_type_id_fk_fkey;
       public          postgres    false    226    3027    227                       2606    26498 2   pvr_user_type pvr_user_type_designation_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_type
    ADD CONSTRAINT pvr_user_type_designation_id_fk_fkey FOREIGN KEY (designation_id_fk) REFERENCES public.pvr_master_designation(desig_id_pk) NOT VALID;
 \   ALTER TABLE ONLY public.pvr_user_type DROP CONSTRAINT pvr_user_type_designation_id_fk_fkey;
       public          postgres    false    212    2997    227                       2606    26503 0   pvr_vr_detail pvr_vr_detail_candidate_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_candidate_id_fk_fkey FOREIGN KEY (candidate_id_fk) REFERENCES public.pvr_candidate_details(candidate_id_pk) NOT VALID;
 Z   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_candidate_id_fk_fkey;
       public          postgres    false    2975    201    228                       2606    26508 +   pvr_vr_detail pvr_vr_detail_memo_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_memo_id_fk_fkey FOREIGN KEY (memo_id_fk) REFERENCES public.pvr_memo(memo_id_pk) NOT VALID;
 U   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_memo_id_fk_fkey;
       public          postgres    false    220    228    3013                       2606    26513 7   pvr_vr_detail pvr_vr_detail_pvr_final_status_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pvr_final_status_id_fk_fkey FOREIGN KEY (pvr_final_status_id_fk) REFERENCES public.pvr_final_status(pvr_final_status_id_pk) NOT VALID;
 a   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pvr_final_status_id_fk_fkey;
       public          postgres    false    206    2985    228                       2606    26518 1   pvr_vr_detail pvr_vr_detail_pvr_report_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pvr_report_id_fk_fkey FOREIGN KEY (pvr_report_id_fk) REFERENCES public.pvr_report(pvr_report_id_pk) NOT VALID;
 [   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pvr_report_id_fk_fkey;
       public          postgres    false    228    224    3021                       2606    26523 2   pvr_vr_detail pvr_vr_detail_pvr_sent_to_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pvr_sent_to_id_fk_fkey FOREIGN KEY (pvr_sent_to_id_fk) REFERENCES public.pvr_user_profile(profile_id_pk) NOT VALID;
 \   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pvr_sent_to_id_fk_fkey;
       public          postgres    false    228    226    3025                       2606    26528 ,   pvr_vr_detail pvr_vr_detail_pvr_type_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pvr_type_fk_fkey FOREIGN KEY (pvr_type_fk) REFERENCES public.pvr_master_defence(df_type_id_pk) NOT VALID;
 V   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pvr_type_fk_fkey;
       public          postgres    false    228    2993    210            	           2606    26533 /   pvr_vr_detail pvr_vr_detail_pvr_with_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pvr_with_id_fk_fkey FOREIGN KEY (pvr_with_id_fk) REFERENCES public.pvr_with(pvr_with_id_pk) NOT VALID;
 Y   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pvr_with_id_fk_fkey;
       public          postgres    false    229    3031    228            
           2606    26538 .   pvr_vr_detail pvr_vr_detail_receipt_no_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_receipt_no_fk_fkey FOREIGN KEY (receipt_no_fk) REFERENCES public.pvr_receipt_no(receipt_no) NOT VALID;
 X   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_receipt_no_fk_fkey;
       public          postgres    false    3017    222    228                       2606    26543     pvr_with pvr_with_pvr_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_with
    ADD CONSTRAINT pvr_with_pvr_id_fk_fkey FOREIGN KEY (pvr_id_fk) REFERENCES public.pvr_vr_detail(pvr_id_pk) NOT VALID;
 J   ALTER TABLE ONLY public.pvr_with DROP CONSTRAINT pvr_with_pvr_id_fk_fkey;
       public          postgres    false    3029    228    229            �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �   y   x���;�0E����|bYӱ���	+��[H�n{���4��9�����\
�u��8j�Bެ	�V� �(�P�B��6f�MH�$LH+��(���+Z����	~-��8�/$?����WO,      �   -   x�3�tO�K-J��2��wr�u�2�N\&���\���!\1z\\\ ���      �   C   x�3��K,��2�t�,J�/JN�2�t,ʭ�2����SpIMK�
�r$%*�f�d�$Ur��qqq �M      �   5   x�3�Rvu���2�9��8���$�0�2�tt��X F��� c��      �   S   x����0 �7L�&��B+��|L��w�޻5�Im�
+�����ĮkI���
+� �L:3n�S����ς�/�.p      �      x�}[ے㸎|V}��&�<�	K�%��.i,Z7�$��*���c3A����#:::A��`�Ӥv�iz?^������,�����%�^�4;$���ޞ��ͱ]��'a]ݼ��讷�4};��ni����ߊdp}�����L�0�e�ή���J�~>�a��o�]�����u���xK���j�����-M�q��v�廛�/ntKl{xK����K��q������؅9~�?��9G
�w��[z�W��{��H��������L�)�6h��V��T៚(����-����-�'���?ɟ�,M\�fu�[P�[�a��޻�47��!��|�Mq_�}����1�*K�4;&Wl�evC�oY�,n8c��NKX�0�T�ܸ�+�t�vw���O��5>�4��Үw��,�혇CRO�r�_8�'tL��q�E��~n�S[&}���w0��o�W	��n�U�BO�2Â/z���VS���'��@{^}��ָ!�j9�em��r,�:�f?�#�f|oR ���2���6��+#̞ �Í��t�'�kC��k����$�j���'�U�!�N��{��
F=�g�w�mT$�l������L3,&�q�"�8�f	����d��a/Kݺ��q���f�B����4�V�ջ^7��p+V��Z�U�}�M�y���G��M�<����_?O_7����.��!�q�<�st�6-�������_@���BS�n��ow�����vxz�њ����,��������h�4��e�&2�/̝��?L��hA0G�+ɟ0v�ig�#|�	>>%8[���mv��/�(�8�^aE��:�e+����5�����:�
<E'g����xU�ͯzz�T�qsw�*4��&X��Uui��L���-E/�&~��	>q�]��'V�ua?����M���O83�YY�O����۩�3��ꂅ3�v�t ���X�>�'Gh��������m��&�����)��
G�m���,%9��^͢�,�]]��49���h��/���ڢ�>��f=`W���^���=5�lz(#�I�TE⡡Ӄ�ܛeU8���5#��5�%cs��M���C�;�|�?��?>��hEr��~�z��%~�aM模SB�3�@(��c�8�k�`�f'�MX��ȍz��T\7}�:��F���GU4�^�BO��R�Z�`p"��e̅�˦�����G��a�JZ1��m��������v�X�	�`4 ~��MSp�������v?�5���fK��Ozn�������CB�`�=������qr4T�����-<ҝ�۰��Q(����~�\��=�ؓ]�d �0�a.��#�Up�\&R�k^�k�T��l:�ލ�s��v?> �t���U�勫)�����A������m4D�;��� 3yHp7�G+	vQ���Y�@�UPt��&�� >1zO%��wCD����{7Nw�:�� \�0;�	N���Y��z�����W����#�[�<$���U���FLæ�l�Il�ٴ+��]]+���ED��7Z�Mvn|�X�����q@�f� %�`��޹Q78��M�f,x�-��}�&�Ó��@�PRJ�Ѵ�+捓�;����N4ۓ`^ڛ���dh�9W��z��7�C�v��d{�3Pr�z;(#�+.?��X�/�￤W��Kh)h�"��l��^��H�D�>�`q�
N�:l)￰��Et�fh���f��)u3�v��/7���R��]@o?�	#o��h,�Yw�� �@�\|��4�_ZeW��.(�cu��j���@�n�]2P�Q;��L�c��m�$��q��X6��u���0K O���d 43-�0�3����^v�y3����o0�28Z�P��>-T�������dx1 ~�	���[K�%	�ü��ȟ��T(c�u43�%ʴh7�x1Z+8�B넆;��p�4v�R�~�r6l[��I���`��ss	?�;r�^ݛ~@o>�W[2L��m�9N&����?>}ɶ�)\Lg�2z�Ţ�����)���nh�v�EL�	Y2s,h�[]��p�pfܤ�\.�g��LO4�v"�#��e;wМ�vIl�*�Qɮ��:��5I_�JF+��@���.K�֯�,�{3�.�֘���d���,�~��_~L��ƞ�VR������k\m�e���|�U�g�IBPȺ0XQ�ȟ#�3��m�,����l$1��M�0�f�#x��7��4���`����*�I0�����F��*a��b S7u�28e%Ȓ�0��yZ'����a0De]N�B�ɭm:!�͸��X\l���X����mzJ�p�ωQz�̗��VQ}/�J�J�^�,�!���8����d��.� -�oFǤ�����22�Ƣ��oSw�]���'\���(��na>�4q�1���@�W�ܙ�v��P� ��18����?�`i�Qa%_�)�
2��dx��W�Θ̿����༊<�OapJ��c[~N,�
�KF'}s�gh�����1N1��
,�4�M��%�6�i���}x��_ڃ3akZ�Vi����i��]�Xh1�C�W��4��A������ᖯ��V�~iPƱ�ܠRY�?��3}Ze�4���������
�V/���nvW��׆[~�����%s�,��֬-%9-y	W��[�ݏK���W���k��{F�IW�`����-�O�8���<�I�zĖ�i���w�ۣ*Y!�����g���l�"�R�)����-N	@���q]��ivv2�8�9�xx���Y��6�������٭O;�n�-����db����
�$�k��`�4�ٓ�JfIPv���t�O�|?�tb���Wb/��2*�	��n.-�����)N�-J��|��p�킩��P<�j ��MP�`Q���jo�����B�(c������}M�J�|)�����jQ�ۜX�b��vVcU�����Ȯ�އ`��|m6k�jݗ��{1K�8����y!3��k�y �6/���K��bC�A<���Z�����{��|/ѓ7���VQ�f���*�Z@�X�aP������aC������^��i�o0��p�ˑT��R�`W���^� ���*4���۩�f���Ǌ�<���i��fe�b����/?�)���0 O�5�QKل��}Ir*Ԧ_R� Oڛ�IqN/�b�C�J��U���<çc����BG�0V!�<v������>vg�#���`��N_����C�\��4��m$	\�s~	W�b�]��8�1S�QZ�x�>w�}D�F\��s/�M#OZ z����F� F5fj ^,~�s~�\��wq�Y!Cr;�=�s|��?0���=I���A���W�J�G���Fr}�ى�i����'��x�d,d��G-��@�qb�v�:J�4�*m����>�
���:�NJ�@��GjI%o)v"��N��_�4�7-k�4��Gf�xH>p�.���j�h�
%��4@�E��#�Y.�(�N�J��FC������J.
��`�T�fqV�%��!��ɂ�A�t̥f�@|sdfVcdx�d�#��ؙ�����g0����Tp��wߴO�)+�>��`�Vd���z?َs>ŏ�x@y4vjU!I�����f�{Z��!��Y�d�́_��q��S*�y�d̍U?c�m�p�g��L�Ġ�%}|�Ѹ\��`g!On�^[�e�R�&8�9̏�F���pEȪ�#K�:�������m�3�l��*���;�ukP���E��Bc���dy�kI���м��J#��<%�����sF���S.qǏ�S�W��i�ѵ��1Ȍk����ƏR�����%��=��bm�B�R���i�F:��/5��ˢq��Y��	d��ތҲL��YmƇo���fD�:FH��U��A��ҍ+������d�[&�~5f�VвFlV�p)@`�| [�[�f���͠X�_���ag�Ú�
e����;����w=*	`�b�ū��ZJ� W  ��/[�4��X �c�5��">k,�c{-��P��NʆvH(���e�6�'
�ѼȎ(PN�mD���aT(�����`������k �mTtd�a�b�>jGg��ᘸ�#�L̶?�2A�C"=T�"��Z$\Pp)[c����{�&�Ke�BJp�v�è�Z-�}�=�������D����
�����2����P��V�2p�i/�
/�R��Q0�ܺ�I갸_�n��R5N�H���Į~��s�d��I��K���nӺ��f/��a76}/�M��x����s�|-q�~?��I~���d)�Kf�L@w>�Y���1 �闏�z�>�hq]��]�ʎ���o(���>��Rx��v�����j	�d�^���*�+�o$��*w���W��P�Z/7��H�=߫
*��m2�P�; ^6����"	��Vz�q��IyZ��Q왱�I�@D��0��1J*@��TY¯Q)4z��/]��0oF��:FTr���S%�����Ւ�P -������ft��/!�>�����	X�%0�RU_�ߓ|��M�97s�4��QD�k;)�:&��/��~���� ^ߛ�җ��J����^?6=Zq�q-r/lp�}���o=ܰJ���Ձ���_������Ǉs�x�y��,����KI��2jK��cng�U�����8_ݘw���t�C2��o1��:y��)��wP��ɿ��8w-9�wi�H�'��k��i�T����D�FV}�^�o���70J�̩#em��������h&���y�t����}���y;����\o��/���R���{�n1�J�2�Y`36[��AҫXSx[<*Ե۪�x�����G�N�����c��\��'���I4���}8��6��5��ؠ����\��?.R���_\	3�9Lk�i��vM�@8��Hp��+�'C�e��L)�SX)ʀ5�p�Z�b��WaRl!�g�Q�pE_��n�u�7�6J�ѿO�$4��gɇƊ� ���	ɝ�s��W�P	�:3�T����g� ����^%������0�c���A���F�釕��&���?ooo�'�ѥ      �   $   x�3�.I,IUp�/+�2�tN�+)J́pc���� �N	|      �   #   x�3��M�I�2�tK�1�9�K2R���b���� |k�      �   *   x�3�t�	�tQ�ut1C\���<�]9��b���� ���      �      x������ � �      �   	  x�5PKn�0\?N�	��_�eH�TQ[E���f �;2Њ��6ac͌g�ϏQ	�fby�P��d=L�K���A�yFRM�t�z.Ƃ���mǹ^���r�K3�؝#����3lõ���-jO�t�m�؆N�B?c�n���2sw )��B��2���O�Z�¼<��XHhA'�w��l��&+㎮>��#���~_?M6tWS�]"�$a.�j�?%�[ʌ~��t��Еdԙy�s�7�5,f�U,�V��+��x��E�?�_r      �   @  x�U��n!E��W̪�*�L˛�f�h����5M�+���ۊ�؆�aE�1d��C��cn�φn--8�H�O6�Ȟ'j�"c�)ޓG~ �d��)cA��̧�ߗ���9H+E%�k��4!���YJ��u5RD
�&U��y͐�=�ܓ`u��f)�C�#����DwW�pvI�X�h�'�Vt��x�ֽ�ZC��M����in��[YOd!(24뽄6C�Κ��ւ���V�����$O�"'T�`���*���ٻs76�V��#6�*b���66��Ķ�w9?�L]�)���,���62 '׹��띙��te      �      x������ � �      �   -  x�uR�n�0<���c��P)�ǭ��c,l���wm����gwgf�d${����|a��V�t�	*�b)�ڨ��p�7+"�zd0kge:��l����r�[b2���������{�=�57t��X��(���n+#�R�^���i�aN�1�b�?s����Dt߷NN�M|�'��v�Qw�|i���d����rm�{�U�,	�yT��ē�3&6���pcX0�0>��<��y}{C�'�a*�]���d�kC��,���Jk=���5�@�zB� ����      �      x������ � �      �      x������ � �      �      x������ � �      �      x�3�4A�=... ��      �   9   x�3�LLJvH�M���K����wV��@��q�gIjq	�!W� �o�      �      x�3�4�4�4�2�4�`H��qqq 3�j      �      x������ � �      �      x������ � �     