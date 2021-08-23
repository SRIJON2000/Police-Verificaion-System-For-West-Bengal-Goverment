PGDMP                         y            PVR    13.3    13.3 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    21374    PVR    DATABASE     a   CREATE DATABASE "PVR" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_India.1252';
    DROP DATABASE "PVR";
                postgres    false            �            1259    21375    pvr_audit_log    TABLE     f  CREATE TABLE public.pvr_audit_log (
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
       public         heap    postgres    false            �            1259    21381    pvr_candidate_details    TABLE     �  CREATE TABLE public.pvr_candidate_details (
    candidate_id_pk bigint NOT NULL,
    reference_no_fk bigint NOT NULL,
    employer_id_fk bigint NOT NULL,
    profile_id_fk bigint NOT NULL,
    candidate_f_name character varying(50) NOT NULL,
    candidate_m_name character varying(50) NOT NULL,
    candidate_l_name character varying(50) NOT NULL,
    candidate_gender_id_fk bigint NOT NULL,
    candidate_caste_id_fk bigint NOT NULL,
    candidate_aadhaar_no_fk numeric(12,0) NOT NULL,
    candidate_house_no character varying(50) NOT NULL,
    candidate_street character varying(50) NOT NULL,
    candidate_landmark character varying(50) NOT NULL,
    candidate_city character varying NOT NULL,
    candidate_post_office character varying NOT NULL,
    candidate_police_station_id_fk bigint NOT NULL,
    candidate_pin_fk bigint NOT NULL,
    candidate_district_id_fk bigint NOT NULL,
    candidate_photo_path character varying(80) NOT NULL,
    candidate_defence_type_id_fk bigint NOT NULL
);
 )   DROP TABLE public.pvr_candidate_details;
       public         heap    postgres    false            �            1259    21387    pvr_candidate_profile    TABLE     �  CREATE TABLE public.pvr_candidate_profile (
    profile_id_pk bigint NOT NULL,
    candidate_father_name character varying(50) NOT NULL,
    candidate_mother_name character varying(50) NOT NULL,
    candidate_nationality character varying(50) NOT NULL,
    candidate_dob date NOT NULL,
    "candidate_school name" character varying(80) NOT NULL,
    candidate_school_address character varying(100) NOT NULL,
    candidate_school_district_id_fk bigint NOT NULL,
    "candidate_college name " character varying(50) NOT NULL,
    candidate_college_address character varying(100) NOT NULL,
    candidate_college_district_id_fk bigint NOT NULL,
    candidate_aadhaar_no numeric(12,0) NOT NULL
);
 )   DROP TABLE public.pvr_candidate_profile;
       public         heap    postgres    false            �            1259    21390    pvr_check_first_user    TABLE     k  CREATE TABLE public.pvr_check_first_user (
    user_id_pk bigint NOT NULL,
    check_if_first_user integer NOT NULL,
    check_profile_updated_once integer NOT NULL,
    CONSTRAINT check_first_user_check CHECK ((check_if_first_user = ANY (ARRAY[0, 1]))),
    CONSTRAINT check_profile_updated_once_check CHECK ((check_profile_updated_once = ANY (ARRAY[0, 1])))
);
 (   DROP TABLE public.pvr_check_first_user;
       public         heap    postgres    false            �            1259    21395    pvr_employer    TABLE       CREATE TABLE public.pvr_employer (
    employer_id_pk bigint NOT NULL,
    profile_id_fk bigint NOT NULL,
    employer_name character varying(50) NOT NULL,
    employer_add1 character varying(50) NOT NULL,
    employer_add2 character varying(50) NOT NULL
);
     DROP TABLE public.pvr_employer;
       public         heap    postgres    false            �            1259    21398    pvr_employer_profile    TABLE     �  CREATE TABLE public.pvr_employer_profile (
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
       public         heap    postgres    false            �            1259    21401    pvr_final_status    TABLE     �   CREATE TABLE public.pvr_final_status (
    pvr_final_status_id_pk bigint NOT NULL,
    pvr_id_fk bigint NOT NULL,
    final_status_name character varying(50) NOT NULL
);
 $   DROP TABLE public.pvr_final_status;
       public         heap    postgres    false            �            1259    21404 
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
       public         heap    postgres    false            �            1259    21410 	   pvr_login    TABLE     j  CREATE TABLE public.pvr_login (
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
       public         heap    postgres    false            �            1259    21416    pvr_master_caste    TABLE     y   CREATE TABLE public.pvr_master_caste (
    caste_id_pk bigint NOT NULL,
    caste_name character varying(50) NOT NULL
);
 $   DROP TABLE public.pvr_master_caste;
       public         heap    postgres    false            �            1259    21419    pvr_master_defence    TABLE     }   CREATE TABLE public.pvr_master_defence (
    "df_type_id_pk " bigint NOT NULL,
    df_type character varying(50) NOT NULL
);
 &   DROP TABLE public.pvr_master_defence;
       public         heap    postgres    false            �            1259    21422    pvr_master_department    TABLE     �   CREATE TABLE public.pvr_master_department (
    dept_id_pk bigint NOT NULL,
    dept_name character varying(50) NOT NULL,
    short_name character varying(15) NOT NULL,
    office_id_fk bigint NOT NULL
);
 )   DROP TABLE public.pvr_master_department;
       public         heap    postgres    false            �            1259    21425    pvr_master_designation    TABLE     �   CREATE TABLE public.pvr_master_designation (
    desig_id_pk bigint NOT NULL,
    desig_name character varying(50) NOT NULL,
    dept_id_fk bigint NOT NULL
);
 *   DROP TABLE public.pvr_master_designation;
       public         heap    postgres    false            �            1259    21428    pvr_master_district    TABLE     �   CREATE TABLE public.pvr_master_district (
    district_id_pk bigint NOT NULL,
    district_name character varying(50) NOT NULL,
    state_id_fk bigint NOT NULL,
    dist_lg_code bigint NOT NULL
);
 '   DROP TABLE public.pvr_master_district;
       public         heap    postgres    false            �            1259    21431    pvr_master_employer_type    TABLE        CREATE TABLE public.pvr_master_employer_type (
    type_id_pk bigint NOT NULL,
    type_name character varying(50) NOT NULL
);
 ,   DROP TABLE public.pvr_master_employer_type;
       public         heap    postgres    false            �            1259    21434    pvr_master_gender    TABLE     |   CREATE TABLE public.pvr_master_gender (
    gender_id_pk bigint NOT NULL,
    gender_name character varying(20) NOT NULL
);
 %   DROP TABLE public.pvr_master_gender;
       public         heap    postgres    false            �            1259    21437    pvr_master_office    TABLE     �   CREATE TABLE public.pvr_master_office (
    office_id_pk bigint NOT NULL,
    office_name character varying(50) NOT NULL,
    district_id_fk bigint NOT NULL
);
 %   DROP TABLE public.pvr_master_office;
       public         heap    postgres    false            �            1259    21440    pvr_master_pincode    TABLE     �   CREATE TABLE public.pvr_master_pincode (
    pincode_id_pk bigint NOT NULL,
    pincode_no_pk bigint NOT NULL,
    district_id_fk bigint NOT NULL
);
 &   DROP TABLE public.pvr_master_pincode;
       public         heap    postgres    false            �            1259    21443    pvr_master_policestation    TABLE     �   CREATE TABLE public.pvr_master_policestation (
    ps_id_pk bigint NOT NULL,
    ps_name character varying(50) NOT NULL,
    district_id_fk bigint NOT NULL
);
 ,   DROP TABLE public.pvr_master_policestation;
       public         heap    postgres    false            �            1259    21446    pvr_master_state    TABLE     y   CREATE TABLE public.pvr_master_state (
    state_id_pk bigint NOT NULL,
    state_name character varying(50) NOT NULL
);
 $   DROP TABLE public.pvr_master_state;
       public         heap    postgres    false            �            1259    21449    pvr_memo    TABLE     �   CREATE TABLE public.pvr_memo (
    memo_id_pk bigint NOT NULL,
    memo_no character varying(50) NOT NULL,
    memo_issued_by_fk bigint NOT NULL,
    issue_date date NOT NULL
);
    DROP TABLE public.pvr_memo;
       public         heap    postgres    false            �            1259    21452    pvr_privilege    TABLE     '  CREATE TABLE public.pvr_privilege (
    privilege_id_pk bigint NOT NULL,
    "parent " integer NOT NULL,
    link character varying(70) NOT NULL,
    "order" integer NOT NULL,
    page_name character varying(70) NOT NULL,
    active_status numeric NOT NULL,
    view_sidebar numeric NOT NULL
);
 !   DROP TABLE public.pvr_privilege;
       public         heap    postgres    false            �            1259    21458    pvr_receipt_no    TABLE     g   CREATE TABLE public.pvr_receipt_no (
    receipt_no bigint NOT NULL,
    receipt_date date NOT NULL
);
 "   DROP TABLE public.pvr_receipt_no;
       public         heap    postgres    false            �            1259    21461    pvr_reference_no    TABLE     �   CREATE TABLE public.pvr_reference_no (
    ref_no_pk bigint NOT NULL,
    receipt_no_fk bigint NOT NULL,
    ref_date date NOT NULL
);
 $   DROP TABLE public.pvr_reference_no;
       public         heap    postgres    false            �            1259    21464 
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
       public         heap    postgres    false            �            1259    21467    pvr_user_privilege    TABLE     �   CREATE TABLE public.pvr_user_privilege (
    user_priv_id_pk bigint NOT NULL,
    privilege_id_fk bigint NOT NULL,
    active_status integer NOT NULL,
    user_type_id_fk bigint NOT NULL
);
 &   DROP TABLE public.pvr_user_privilege;
       public         heap    postgres    false            �            1259    21470    pvr_user_profile    TABLE     C  CREATE TABLE public.pvr_user_profile (
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
       public         heap    postgres    false            �            1259    21473    pvr_user_type    TABLE     �   CREATE TABLE public.pvr_user_type (
    user_type_id_pk bigint NOT NULL,
    designation_id_fk bigint NOT NULL,
    active_status numeric NOT NULL,
    user_level integer NOT NULL
);
 !   DROP TABLE public.pvr_user_type;
       public         heap    postgres    false            �            1259    21479    pvr_vr_detail    TABLE     �  CREATE TABLE public.pvr_vr_detail (
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
       public         heap    postgres    false            �            1259    21485    pvr_with    TABLE     �   CREATE TABLE public.pvr_with (
    pvr_with_id_pk bigint NOT NULL,
    pvr_id_fk bigint NOT NULL,
    pvr_with_status character varying(50) NOT NULL,
    pvr_with_date date NOT NULL
);
    DROP TABLE public.pvr_with;
       public         heap    postgres    false            �          0    21375    pvr_audit_log 
   TABLE DATA           z   COPY public.pvr_audit_log (audit_id_pk, section, action, request, comment, ip_addr, login_id_fk, "timestamp") FROM stdin;
    public          postgres    false    200   n�       �          0    21381    pvr_candidate_details 
   TABLE DATA           �  COPY public.pvr_candidate_details (candidate_id_pk, reference_no_fk, employer_id_fk, profile_id_fk, candidate_f_name, candidate_m_name, candidate_l_name, candidate_gender_id_fk, candidate_caste_id_fk, candidate_aadhaar_no_fk, candidate_house_no, candidate_street, candidate_landmark, candidate_city, candidate_post_office, candidate_police_station_id_fk, candidate_pin_fk, candidate_district_id_fk, candidate_photo_path, candidate_defence_type_id_fk) FROM stdin;
    public          postgres    false    201   ��       �          0    21387    pvr_candidate_profile 
   TABLE DATA           T  COPY public.pvr_candidate_profile (profile_id_pk, candidate_father_name, candidate_mother_name, candidate_nationality, candidate_dob, "candidate_school name", candidate_school_address, candidate_school_district_id_fk, "candidate_college name ", candidate_college_address, candidate_college_district_id_fk, candidate_aadhaar_no) FROM stdin;
    public          postgres    false    202   ��       �          0    21390    pvr_check_first_user 
   TABLE DATA           k   COPY public.pvr_check_first_user (user_id_pk, check_if_first_user, check_profile_updated_once) FROM stdin;
    public          postgres    false    203   ��       �          0    21395    pvr_employer 
   TABLE DATA           r   COPY public.pvr_employer (employer_id_pk, profile_id_fk, employer_name, employer_add1, employer_add2) FROM stdin;
    public          postgres    false    204   ��       �          0    21398    pvr_employer_profile 
   TABLE DATA           �   COPY public.pvr_employer_profile (profile_id_pk, employer_district_id_fk, employer_pincode_fk, employer_type_id_fk, employer_sender_name, employer_sender_designation, employer_email, employer_contact) FROM stdin;
    public          postgres    false    205   �       �          0    21401    pvr_final_status 
   TABLE DATA           `   COPY public.pvr_final_status (pvr_final_status_id_pk, pvr_id_fk, final_status_name) FROM stdin;
    public          postgres    false    206   "�       �          0    21404 
   pvr_issues 
   TABLE DATA           j   COPY public.pvr_issues (issue_id_pk, name, email, rating, description, timstamp, login_id_fk) FROM stdin;
    public          postgres    false    207   ?�       �          0    21410 	   pvr_login 
   TABLE DATA           �   COPY public.pvr_login (username, password, user_type_id_fk, location_code, login_id_pk, active_status, dept_id_fk, office_id_fk, desig_id_fk) FROM stdin;
    public          postgres    false    208   \�       �          0    21416    pvr_master_caste 
   TABLE DATA           C   COPY public.pvr_master_caste (caste_id_pk, caste_name) FROM stdin;
    public          postgres    false    209   ��       �          0    21419    pvr_master_defence 
   TABLE DATA           G   COPY public.pvr_master_defence ("df_type_id_pk ", df_type) FROM stdin;
    public          postgres    false    210   �       �          0    21422    pvr_master_department 
   TABLE DATA           `   COPY public.pvr_master_department (dept_id_pk, dept_name, short_name, office_id_fk) FROM stdin;
    public          postgres    false    211   D�       �          0    21425    pvr_master_designation 
   TABLE DATA           U   COPY public.pvr_master_designation (desig_id_pk, desig_name, dept_id_fk) FROM stdin;
    public          postgres    false    212   ��       �          0    21428    pvr_master_district 
   TABLE DATA           g   COPY public.pvr_master_district (district_id_pk, district_name, state_id_fk, dist_lg_code) FROM stdin;
    public          postgres    false    213   ��       �          0    21431    pvr_master_employer_type 
   TABLE DATA           I   COPY public.pvr_master_employer_type (type_id_pk, type_name) FROM stdin;
    public          postgres    false    214   
�       �          0    21434    pvr_master_gender 
   TABLE DATA           F   COPY public.pvr_master_gender (gender_id_pk, gender_name) FROM stdin;
    public          postgres    false    215   >�       �          0    21437    pvr_master_office 
   TABLE DATA           V   COPY public.pvr_master_office (office_id_pk, office_name, district_id_fk) FROM stdin;
    public          postgres    false    216   q�       �          0    21440    pvr_master_pincode 
   TABLE DATA           Z   COPY public.pvr_master_pincode (pincode_id_pk, pincode_no_pk, district_id_fk) FROM stdin;
    public          postgres    false    217   ��       �          0    21443    pvr_master_policestation 
   TABLE DATA           U   COPY public.pvr_master_policestation (ps_id_pk, ps_name, district_id_fk) FROM stdin;
    public          postgres    false    218   ��       �          0    21446    pvr_master_state 
   TABLE DATA           C   COPY public.pvr_master_state (state_id_pk, state_name) FROM stdin;
    public          postgres    false    219   ��       �          0    21449    pvr_memo 
   TABLE DATA           V   COPY public.pvr_memo (memo_id_pk, memo_no, memo_issued_by_fk, issue_date) FROM stdin;
    public          postgres    false    220   �       �          0    21452    pvr_privilege 
   TABLE DATA           z   COPY public.pvr_privilege (privilege_id_pk, "parent ", link, "order", page_name, active_status, view_sidebar) FROM stdin;
    public          postgres    false    221   .�       �          0    21458    pvr_receipt_no 
   TABLE DATA           B   COPY public.pvr_receipt_no (receipt_no, receipt_date) FROM stdin;
    public          postgres    false    222   n�       �          0    21461    pvr_reference_no 
   TABLE DATA           N   COPY public.pvr_reference_no (ref_no_pk, receipt_no_fk, ref_date) FROM stdin;
    public          postgres    false    223   ��       �          0    21464 
   pvr_report 
   TABLE DATA           �   COPY public.pvr_report (pvr_report_id_pk, ref_no_fk, receipt_no_fk, pvr_report_no, pvr_id_fk, issue_date, pvr_report_path) FROM stdin;
    public          postgres    false    224   ��       �          0    21467    pvr_user_privilege 
   TABLE DATA           n   COPY public.pvr_user_privilege (user_priv_id_pk, privilege_id_fk, active_status, user_type_id_fk) FROM stdin;
    public          postgres    false    225   ��       �          0    21470    pvr_user_profile 
   TABLE DATA           �   COPY public.pvr_user_profile (profile_id_pk, username, first_name, middle_name, last_name, mobille, "email ", district_id_fk, designation_id_fk, office_id_fk, department_id_fk, signature_path, user_type_id_fk) FROM stdin;
    public          postgres    false    226   ��       �          0    21473    pvr_user_type 
   TABLE DATA           f   COPY public.pvr_user_type (user_type_id_pk, designation_id_fk, active_status, user_level) FROM stdin;
    public          postgres    false    227   0�       �          0    21479    pvr_vr_detail 
   TABLE DATA           �   COPY public.pvr_vr_detail (pvr_id_pk, receipt_no_fk, candidate_id_fk, application_date, pvr_type_fk, pvr_sent_to_id_fk, memo_id_fk, pvr_with_id_fk, pvr_final_status_id_fk, remarks, pvr_report_id_fk) FROM stdin;
    public          postgres    false    228   U�       �          0    21485    pvr_with 
   TABLE DATA           ]   COPY public.pvr_with (pvr_with_id_pk, pvr_id_fk, pvr_with_status, pvr_with_date) FROM stdin;
    public          postgres    false    229   r�       �           2606    21489 *   pvr_check_first_user check_first_user_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.pvr_check_first_user
    ADD CONSTRAINT check_first_user_pkey PRIMARY KEY (user_id_pk);
 T   ALTER TABLE ONLY public.pvr_check_first_user DROP CONSTRAINT check_first_user_pkey;
       public            postgres    false    203            �           2606    21491     pvr_audit_log pvr_audit_log_pkey 
   CONSTRAINT     g   ALTER TABLE ONLY public.pvr_audit_log
    ADD CONSTRAINT pvr_audit_log_pkey PRIMARY KEY (audit_id_pk);
 J   ALTER TABLE ONLY public.pvr_audit_log DROP CONSTRAINT pvr_audit_log_pkey;
       public            postgres    false    200            �           2606    21493 0   pvr_candidate_details pvr_candidate_details_pkey 
   CONSTRAINT     {   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_pkey PRIMARY KEY (candidate_id_pk);
 Z   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_pkey;
       public            postgres    false    201            �           2606    21495 0   pvr_candidate_profile pvr_candidate_profile_pkey 
   CONSTRAINT     y   ALTER TABLE ONLY public.pvr_candidate_profile
    ADD CONSTRAINT pvr_candidate_profile_pkey PRIMARY KEY (profile_id_pk);
 Z   ALTER TABLE ONLY public.pvr_candidate_profile DROP CONSTRAINT pvr_candidate_profile_pkey;
       public            postgres    false    202            �           2606    21497    pvr_employer pvr_employer_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.pvr_employer
    ADD CONSTRAINT pvr_employer_pkey PRIMARY KEY (employer_id_pk);
 H   ALTER TABLE ONLY public.pvr_employer DROP CONSTRAINT pvr_employer_pkey;
       public            postgres    false    204            �           2606    21499 .   pvr_employer_profile pvr_employer_profile_pkey 
   CONSTRAINT     w   ALTER TABLE ONLY public.pvr_employer_profile
    ADD CONSTRAINT pvr_employer_profile_pkey PRIMARY KEY (profile_id_pk);
 X   ALTER TABLE ONLY public.pvr_employer_profile DROP CONSTRAINT pvr_employer_profile_pkey;
       public            postgres    false    205            �           2606    21501 &   pvr_final_status pvr_final_status_pkey 
   CONSTRAINT     x   ALTER TABLE ONLY public.pvr_final_status
    ADD CONSTRAINT pvr_final_status_pkey PRIMARY KEY (pvr_final_status_id_pk);
 P   ALTER TABLE ONLY public.pvr_final_status DROP CONSTRAINT pvr_final_status_pkey;
       public            postgres    false    206            �           2606    21503    pvr_issues pvr_issues_pkey 
   CONSTRAINT     a   ALTER TABLE ONLY public.pvr_issues
    ADD CONSTRAINT pvr_issues_pkey PRIMARY KEY (issue_id_pk);
 D   ALTER TABLE ONLY public.pvr_issues DROP CONSTRAINT pvr_issues_pkey;
       public            postgres    false    207            �           2606    21505    pvr_login pvr_login_pkey 
   CONSTRAINT     _   ALTER TABLE ONLY public.pvr_login
    ADD CONSTRAINT pvr_login_pkey PRIMARY KEY (login_id_pk);
 B   ALTER TABLE ONLY public.pvr_login DROP CONSTRAINT pvr_login_pkey;
       public            postgres    false    208            �           2606    21507 &   pvr_master_caste pvr_master_caste_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.pvr_master_caste
    ADD CONSTRAINT pvr_master_caste_pkey PRIMARY KEY (caste_id_pk);
 P   ALTER TABLE ONLY public.pvr_master_caste DROP CONSTRAINT pvr_master_caste_pkey;
       public            postgres    false    209            �           2606    21509 *   pvr_master_defence pvr_master_defence_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.pvr_master_defence
    ADD CONSTRAINT pvr_master_defence_pkey PRIMARY KEY ("df_type_id_pk ");
 T   ALTER TABLE ONLY public.pvr_master_defence DROP CONSTRAINT pvr_master_defence_pkey;
       public            postgres    false    210            �           2606    21511 0   pvr_master_department pvr_master_department_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.pvr_master_department
    ADD CONSTRAINT pvr_master_department_pkey PRIMARY KEY (dept_id_pk);
 Z   ALTER TABLE ONLY public.pvr_master_department DROP CONSTRAINT pvr_master_department_pkey;
       public            postgres    false    211            �           2606    21513 2   pvr_master_designation pvr_master_designation_pkey 
   CONSTRAINT     y   ALTER TABLE ONLY public.pvr_master_designation
    ADD CONSTRAINT pvr_master_designation_pkey PRIMARY KEY (desig_id_pk);
 \   ALTER TABLE ONLY public.pvr_master_designation DROP CONSTRAINT pvr_master_designation_pkey;
       public            postgres    false    212            �           2606    21515 ,   pvr_master_district pvr_master_district_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.pvr_master_district
    ADD CONSTRAINT pvr_master_district_pkey PRIMARY KEY (district_id_pk);
 V   ALTER TABLE ONLY public.pvr_master_district DROP CONSTRAINT pvr_master_district_pkey;
       public            postgres    false    213            �           2606    21517 6   pvr_master_employer_type pvr_master_employer_type_pkey 
   CONSTRAINT     |   ALTER TABLE ONLY public.pvr_master_employer_type
    ADD CONSTRAINT pvr_master_employer_type_pkey PRIMARY KEY (type_id_pk);
 `   ALTER TABLE ONLY public.pvr_master_employer_type DROP CONSTRAINT pvr_master_employer_type_pkey;
       public            postgres    false    214            �           2606    21519 (   pvr_master_gender pvr_master_gender_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.pvr_master_gender
    ADD CONSTRAINT pvr_master_gender_pkey PRIMARY KEY (gender_id_pk);
 R   ALTER TABLE ONLY public.pvr_master_gender DROP CONSTRAINT pvr_master_gender_pkey;
       public            postgres    false    215            �           2606    21521 (   pvr_master_office pvr_master_office_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.pvr_master_office
    ADD CONSTRAINT pvr_master_office_pkey PRIMARY KEY (office_id_pk);
 R   ALTER TABLE ONLY public.pvr_master_office DROP CONSTRAINT pvr_master_office_pkey;
       public            postgres    false    216            �           2606    21523 *   pvr_master_pincode pvr_master_pincode_pkey 
   CONSTRAINT     s   ALTER TABLE ONLY public.pvr_master_pincode
    ADD CONSTRAINT pvr_master_pincode_pkey PRIMARY KEY (pincode_id_pk);
 T   ALTER TABLE ONLY public.pvr_master_pincode DROP CONSTRAINT pvr_master_pincode_pkey;
       public            postgres    false    217            �           2606    21525 6   pvr_master_policestation pvr_master_policestation_pkey 
   CONSTRAINT     z   ALTER TABLE ONLY public.pvr_master_policestation
    ADD CONSTRAINT pvr_master_policestation_pkey PRIMARY KEY (ps_id_pk);
 `   ALTER TABLE ONLY public.pvr_master_policestation DROP CONSTRAINT pvr_master_policestation_pkey;
       public            postgres    false    218            �           2606    21527 &   pvr_master_state pvr_master_state_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.pvr_master_state
    ADD CONSTRAINT pvr_master_state_pkey PRIMARY KEY (state_id_pk);
 P   ALTER TABLE ONLY public.pvr_master_state DROP CONSTRAINT pvr_master_state_pkey;
       public            postgres    false    219            �           2606    21529    pvr_memo pvr_memo_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.pvr_memo
    ADD CONSTRAINT pvr_memo_pkey PRIMARY KEY (memo_id_pk);
 @   ALTER TABLE ONLY public.pvr_memo DROP CONSTRAINT pvr_memo_pkey;
       public            postgres    false    220            �           2606    21531     pvr_privilege pvr_privilege_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.pvr_privilege
    ADD CONSTRAINT pvr_privilege_pkey PRIMARY KEY (privilege_id_pk);
 J   ALTER TABLE ONLY public.pvr_privilege DROP CONSTRAINT pvr_privilege_pkey;
       public            postgres    false    221            �           2606    21533 "   pvr_receipt_no pvr_receipt_no_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.pvr_receipt_no
    ADD CONSTRAINT pvr_receipt_no_pkey PRIMARY KEY (receipt_no);
 L   ALTER TABLE ONLY public.pvr_receipt_no DROP CONSTRAINT pvr_receipt_no_pkey;
       public            postgres    false    222            �           2606    21535 &   pvr_reference_no pvr_reference_no_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.pvr_reference_no
    ADD CONSTRAINT pvr_reference_no_pkey PRIMARY KEY (ref_no_pk);
 P   ALTER TABLE ONLY public.pvr_reference_no DROP CONSTRAINT pvr_reference_no_pkey;
       public            postgres    false    223            �           2606    21537    pvr_report pvr_report_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.pvr_report
    ADD CONSTRAINT pvr_report_pkey PRIMARY KEY (pvr_report_id_pk);
 D   ALTER TABLE ONLY public.pvr_report DROP CONSTRAINT pvr_report_pkey;
       public            postgres    false    224            �           2606    21539 *   pvr_user_privilege pvr_user_privilege_pkey 
   CONSTRAINT     u   ALTER TABLE ONLY public.pvr_user_privilege
    ADD CONSTRAINT pvr_user_privilege_pkey PRIMARY KEY (user_priv_id_pk);
 T   ALTER TABLE ONLY public.pvr_user_privilege DROP CONSTRAINT pvr_user_privilege_pkey;
       public            postgres    false    225            �           2606    21541 &   pvr_user_profile pvr_user_profile_pkey 
   CONSTRAINT     o   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_pkey PRIMARY KEY (profile_id_pk);
 P   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_pkey;
       public            postgres    false    226            �           2606    21543     pvr_user_type pvr_user_type_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.pvr_user_type
    ADD CONSTRAINT pvr_user_type_pkey PRIMARY KEY (user_type_id_pk);
 J   ALTER TABLE ONLY public.pvr_user_type DROP CONSTRAINT pvr_user_type_pkey;
       public            postgres    false    227            �           2606    21545     pvr_vr_detail pvr_vr_detail_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pkey PRIMARY KEY (pvr_id_pk);
 J   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pkey;
       public            postgres    false    228            �           2606    21547    pvr_with pvr_with_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.pvr_with
    ADD CONSTRAINT pvr_with_pkey PRIMARY KEY (pvr_with_id_pk);
 @   ALTER TABLE ONLY public.pvr_with DROP CONSTRAINT pvr_with_pkey;
       public            postgres    false    229            �           2606    21548 ,   pvr_audit_log pvr_audit_log_login_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_audit_log
    ADD CONSTRAINT pvr_audit_log_login_id_fk_fkey FOREIGN KEY (login_id_fk) REFERENCES public.pvr_login(login_id_pk) NOT VALID;
 V   ALTER TABLE ONLY public.pvr_audit_log DROP CONSTRAINT pvr_audit_log_login_id_fk_fkey;
       public          postgres    false    208    200    2990            �           2606    21553 F   pvr_candidate_details pvr_candidate_details_candidate_caste_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_caste_id_fk_fkey FOREIGN KEY (candidate_caste_id_fk) REFERENCES public.pvr_master_caste(caste_id_pk) NOT VALID;
 p   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_caste_id_fk_fkey;
       public          postgres    false    209    201    2992            �           2606    21558 M   pvr_candidate_details pvr_candidate_details_candidate_defence_type_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_defence_type_id_fk_fkey FOREIGN KEY (candidate_defence_type_id_fk) REFERENCES public.pvr_master_defence("df_type_id_pk ") NOT VALID;
 w   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_defence_type_id_fk_fkey;
       public          postgres    false    210    201    2994            �           2606    21563 I   pvr_candidate_details pvr_candidate_details_candidate_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_district_id_fk_fkey FOREIGN KEY (candidate_district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 s   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_district_id_fk_fkey;
       public          postgres    false    213    201    3000            �           2606    21568 G   pvr_candidate_details pvr_candidate_details_candidate_gender_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_gender_id_fk_fkey FOREIGN KEY (candidate_gender_id_fk) REFERENCES public.pvr_master_gender(gender_id_pk) NOT VALID;
 q   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_gender_id_fk_fkey;
       public          postgres    false    215    201    3004            �           2606    21573 A   pvr_candidate_details pvr_candidate_details_candidate_pin_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_pin_fk_fkey FOREIGN KEY (candidate_pin_fk) REFERENCES public.pvr_master_pincode(pincode_id_pk) NOT VALID;
 k   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_pin_fk_fkey;
       public          postgres    false    217    201    3008            �           2606    21578 O   pvr_candidate_details pvr_candidate_details_candidate_police_station_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_police_station_id_fk_fkey FOREIGN KEY (candidate_police_station_id_fk) REFERENCES public.pvr_master_policestation(ps_id_pk) NOT VALID;
 y   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_police_station_id_fk_fkey;
       public          postgres    false    218    201    3010            �           2606    21583 ?   pvr_candidate_details pvr_candidate_details_employer_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_employer_id_fk_fkey FOREIGN KEY (employer_id_fk) REFERENCES public.pvr_employer(employer_id_pk) NOT VALID;
 i   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_employer_id_fk_fkey;
       public          postgres    false    204    201    2982            �           2606    21588 >   pvr_candidate_details pvr_candidate_details_profile_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_profile_id_fk_fkey FOREIGN KEY (profile_id_fk) REFERENCES public.pvr_candidate_profile(profile_id_pk) NOT VALID;
 h   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_profile_id_fk_fkey;
       public          postgres    false    2978    201    202            �           2606    21593 @   pvr_candidate_details pvr_candidate_details_reference_no_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_reference_no_fk_fkey FOREIGN KEY (reference_no_fk) REFERENCES public.pvr_reference_no(ref_no_pk) NOT VALID;
 j   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_reference_no_fk_fkey;
       public          postgres    false    3020    201    223            �           2606    21598 F   pvr_employer_profile pvr_employer_profile_employer_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_employer_profile
    ADD CONSTRAINT pvr_employer_profile_employer_district_id_fk_fkey FOREIGN KEY (employer_district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 p   ALTER TABLE ONLY public.pvr_employer_profile DROP CONSTRAINT pvr_employer_profile_employer_district_id_fk_fkey;
       public          postgres    false    205    213    3000            �           2606    21603 B   pvr_employer_profile pvr_employer_profile_employer_pincode_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_employer_profile
    ADD CONSTRAINT pvr_employer_profile_employer_pincode_fk_fkey FOREIGN KEY (employer_pincode_fk) REFERENCES public.pvr_master_pincode(pincode_id_pk) NOT VALID;
 l   ALTER TABLE ONLY public.pvr_employer_profile DROP CONSTRAINT pvr_employer_profile_employer_pincode_fk_fkey;
       public          postgres    false    3008    205    217            �           2606    21608 B   pvr_employer_profile pvr_employer_profile_employer_type_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_employer_profile
    ADD CONSTRAINT pvr_employer_profile_employer_type_id_fk_fkey FOREIGN KEY (employer_type_id_fk) REFERENCES public.pvr_master_employer_type(type_id_pk) NOT VALID;
 l   ALTER TABLE ONLY public.pvr_employer_profile DROP CONSTRAINT pvr_employer_profile_employer_type_id_fk_fkey;
       public          postgres    false    214    205    3002            �           2606    21613 ,   pvr_employer pvr_employer_profile_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_employer
    ADD CONSTRAINT pvr_employer_profile_id_fk_fkey FOREIGN KEY (profile_id_fk) REFERENCES public.pvr_employer_profile(profile_id_pk) NOT VALID;
 V   ALTER TABLE ONLY public.pvr_employer DROP CONSTRAINT pvr_employer_profile_id_fk_fkey;
       public          postgres    false    205    204    2984            �           2606    21618 0   pvr_final_status pvr_final_status_pvr_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_final_status
    ADD CONSTRAINT pvr_final_status_pvr_id_fk_fkey FOREIGN KEY (pvr_id_fk) REFERENCES public.pvr_vr_detail(pvr_id_pk) NOT VALID;
 Z   ALTER TABLE ONLY public.pvr_final_status DROP CONSTRAINT pvr_final_status_pvr_id_fk_fkey;
       public          postgres    false    228    206    3030            �           2606    21623 &   pvr_issues pvr_issues_login_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_issues
    ADD CONSTRAINT pvr_issues_login_id_fk_fkey FOREIGN KEY (login_id_fk) REFERENCES public.pvr_login(login_id_pk) NOT VALID;
 P   ALTER TABLE ONLY public.pvr_issues DROP CONSTRAINT pvr_issues_login_id_fk_fkey;
       public          postgres    false    208    207    2990            �           2606    21628 #   pvr_login pvr_login_dept_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_login
    ADD CONSTRAINT pvr_login_dept_id_fk_fkey FOREIGN KEY (dept_id_fk) REFERENCES public.pvr_master_department(dept_id_pk) NOT VALID;
 M   ALTER TABLE ONLY public.pvr_login DROP CONSTRAINT pvr_login_dept_id_fk_fkey;
       public          postgres    false    211    208    2996            �           2606    21633 $   pvr_login pvr_login_desig_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_login
    ADD CONSTRAINT pvr_login_desig_id_fk_fkey FOREIGN KEY (desig_id_fk) REFERENCES public.pvr_master_designation(desig_id_pk) NOT VALID;
 N   ALTER TABLE ONLY public.pvr_login DROP CONSTRAINT pvr_login_desig_id_fk_fkey;
       public          postgres    false    212    208    2998            �           2606    21638 %   pvr_login pvr_login_office_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_login
    ADD CONSTRAINT pvr_login_office_id_fk_fkey FOREIGN KEY (office_id_fk) REFERENCES public.pvr_master_office(office_id_pk) NOT VALID;
 O   ALTER TABLE ONLY public.pvr_login DROP CONSTRAINT pvr_login_office_id_fk_fkey;
       public          postgres    false    216    208    3006            �           2606    21643 (   pvr_login pvr_login_user_type_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_login
    ADD CONSTRAINT pvr_login_user_type_id_fk_fkey FOREIGN KEY (user_type_id_fk) REFERENCES public.pvr_user_type(user_type_id_pk) NOT VALID;
 R   ALTER TABLE ONLY public.pvr_login DROP CONSTRAINT pvr_login_user_type_id_fk_fkey;
       public          postgres    false    227    208    3028            �           2606    21648 =   pvr_master_department pvr_master_department_office_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_department
    ADD CONSTRAINT pvr_master_department_office_id_fk_fkey FOREIGN KEY (office_id_fk) REFERENCES public.pvr_master_office(office_id_pk) NOT VALID;
 g   ALTER TABLE ONLY public.pvr_master_department DROP CONSTRAINT pvr_master_department_office_id_fk_fkey;
       public          postgres    false    3006    211    216            �           2606    21653 =   pvr_master_designation pvr_master_designation_dept_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_designation
    ADD CONSTRAINT pvr_master_designation_dept_id_fk_fkey FOREIGN KEY (dept_id_fk) REFERENCES public.pvr_master_department(dept_id_pk) NOT VALID;
 g   ALTER TABLE ONLY public.pvr_master_designation DROP CONSTRAINT pvr_master_designation_dept_id_fk_fkey;
       public          postgres    false    212    211    2996            �           2606    21658 8   pvr_master_district pvr_master_district_state_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_district
    ADD CONSTRAINT pvr_master_district_state_id_fk_fkey FOREIGN KEY (state_id_fk) REFERENCES public.pvr_master_state(state_id_pk) NOT VALID;
 b   ALTER TABLE ONLY public.pvr_master_district DROP CONSTRAINT pvr_master_district_state_id_fk_fkey;
       public          postgres    false    213    3012    219            �           2606    21663 7   pvr_master_office pvr_master_office_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_office
    ADD CONSTRAINT pvr_master_office_district_id_fk_fkey FOREIGN KEY (district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 a   ALTER TABLE ONLY public.pvr_master_office DROP CONSTRAINT pvr_master_office_district_id_fk_fkey;
       public          postgres    false    3000    216    213            �           2606    21668 9   pvr_master_pincode pvr_master_pincode_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_pincode
    ADD CONSTRAINT pvr_master_pincode_district_id_fk_fkey FOREIGN KEY (district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 c   ALTER TABLE ONLY public.pvr_master_pincode DROP CONSTRAINT pvr_master_pincode_district_id_fk_fkey;
       public          postgres    false    217    213    3000            �           2606    21673 E   pvr_master_policestation pvr_master_policestation_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_policestation
    ADD CONSTRAINT pvr_master_policestation_district_id_fk_fkey FOREIGN KEY (district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 o   ALTER TABLE ONLY public.pvr_master_policestation DROP CONSTRAINT pvr_master_policestation_district_id_fk_fkey;
       public          postgres    false    3000    218    213            �           2606    21678 (   pvr_memo pvr_memo_memo_issued_by_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_memo
    ADD CONSTRAINT pvr_memo_memo_issued_by_fk_fkey FOREIGN KEY (memo_issued_by_fk) REFERENCES public.pvr_user_profile(profile_id_pk) NOT VALID;
 R   ALTER TABLE ONLY public.pvr_memo DROP CONSTRAINT pvr_memo_memo_issued_by_fk_fkey;
       public          postgres    false    220    226    3026            �           2606    21683 4   pvr_reference_no pvr_reference_no_receipt_no_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_reference_no
    ADD CONSTRAINT pvr_reference_no_receipt_no_fk_fkey FOREIGN KEY (receipt_no_fk) REFERENCES public.pvr_receipt_no(receipt_no) NOT VALID;
 ^   ALTER TABLE ONLY public.pvr_reference_no DROP CONSTRAINT pvr_reference_no_receipt_no_fk_fkey;
       public          postgres    false    3018    223    222            �           2606    21688 $   pvr_report pvr_report_pvr_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_report
    ADD CONSTRAINT pvr_report_pvr_id_fk_fkey FOREIGN KEY (pvr_id_fk) REFERENCES public.pvr_vr_detail(pvr_id_pk) NOT VALID;
 N   ALTER TABLE ONLY public.pvr_report DROP CONSTRAINT pvr_report_pvr_id_fk_fkey;
       public          postgres    false    224    228    3030            �           2606    21693 (   pvr_report pvr_report_receipt_no_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_report
    ADD CONSTRAINT pvr_report_receipt_no_fk_fkey FOREIGN KEY (receipt_no_fk) REFERENCES public.pvr_receipt_no(receipt_no) NOT VALID;
 R   ALTER TABLE ONLY public.pvr_report DROP CONSTRAINT pvr_report_receipt_no_fk_fkey;
       public          postgres    false    3018    224    222            �           2606    21698 $   pvr_report pvr_report_ref_no_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_report
    ADD CONSTRAINT pvr_report_ref_no_fk_fkey FOREIGN KEY (ref_no_fk) REFERENCES public.pvr_reference_no(ref_no_pk) NOT VALID;
 N   ALTER TABLE ONLY public.pvr_report DROP CONSTRAINT pvr_report_ref_no_fk_fkey;
       public          postgres    false    224    223    3020            �           2606    21703 :   pvr_user_privilege pvr_user_privilege_privilege_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_privilege
    ADD CONSTRAINT pvr_user_privilege_privilege_id_fk_fkey FOREIGN KEY (privilege_id_fk) REFERENCES public.pvr_privilege(privilege_id_pk) NOT VALID;
 d   ALTER TABLE ONLY public.pvr_user_privilege DROP CONSTRAINT pvr_user_privilege_privilege_id_fk_fkey;
       public          postgres    false    221    225    3016            �           2606    21708 :   pvr_user_privilege pvr_user_privilege_user_type_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_privilege
    ADD CONSTRAINT pvr_user_privilege_user_type_id_fk_fkey FOREIGN KEY (user_type_id_fk) REFERENCES public.pvr_user_type(user_type_id_pk) NOT VALID;
 d   ALTER TABLE ONLY public.pvr_user_privilege DROP CONSTRAINT pvr_user_privilege_user_type_id_fk_fkey;
       public          postgres    false    3028    227    225            �           2606    21713 7   pvr_user_profile pvr_user_profile_department_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_department_id_fk_fkey FOREIGN KEY (department_id_fk) REFERENCES public.pvr_master_department(dept_id_pk) NOT VALID;
 a   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_department_id_fk_fkey;
       public          postgres    false    2996    226    211            �           2606    21718 8   pvr_user_profile pvr_user_profile_designation_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_designation_id_fk_fkey FOREIGN KEY (designation_id_fk) REFERENCES public.pvr_master_designation(desig_id_pk) NOT VALID;
 b   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_designation_id_fk_fkey;
       public          postgres    false    212    2998    226            �           2606    21723 5   pvr_user_profile pvr_user_profile_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_district_id_fk_fkey FOREIGN KEY (district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 _   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_district_id_fk_fkey;
       public          postgres    false    213    226    3000            �           2606    21728 3   pvr_user_profile pvr_user_profile_office_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_office_id_fk_fkey FOREIGN KEY (office_id_fk) REFERENCES public.pvr_master_office(office_id_pk) NOT VALID;
 ]   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_office_id_fk_fkey;
       public          postgres    false    216    3006    226            �           2606    21733 6   pvr_user_profile pvr_user_profile_user_type_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_user_type_id_fk_fkey FOREIGN KEY (user_type_id_fk) REFERENCES public.pvr_user_type(user_type_id_pk) NOT VALID;
 `   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_user_type_id_fk_fkey;
       public          postgres    false    227    3028    226                        2606    21738 2   pvr_user_type pvr_user_type_designation_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_type
    ADD CONSTRAINT pvr_user_type_designation_id_fk_fkey FOREIGN KEY (designation_id_fk) REFERENCES public.pvr_master_designation(desig_id_pk) NOT VALID;
 \   ALTER TABLE ONLY public.pvr_user_type DROP CONSTRAINT pvr_user_type_designation_id_fk_fkey;
       public          postgres    false    2998    227    212                       2606    21743 0   pvr_vr_detail pvr_vr_detail_candidate_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_candidate_id_fk_fkey FOREIGN KEY (candidate_id_fk) REFERENCES public.pvr_candidate_details(candidate_id_pk) NOT VALID;
 Z   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_candidate_id_fk_fkey;
       public          postgres    false    228    201    2976                       2606    21748 +   pvr_vr_detail pvr_vr_detail_memo_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_memo_id_fk_fkey FOREIGN KEY (memo_id_fk) REFERENCES public.pvr_memo(memo_id_pk) NOT VALID;
 U   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_memo_id_fk_fkey;
       public          postgres    false    228    220    3014                       2606    21753 7   pvr_vr_detail pvr_vr_detail_pvr_final_status_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pvr_final_status_id_fk_fkey FOREIGN KEY (pvr_final_status_id_fk) REFERENCES public.pvr_final_status(pvr_final_status_id_pk) NOT VALID;
 a   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pvr_final_status_id_fk_fkey;
       public          postgres    false    228    2986    206                       2606    21758 1   pvr_vr_detail pvr_vr_detail_pvr_report_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pvr_report_id_fk_fkey FOREIGN KEY (pvr_report_id_fk) REFERENCES public.pvr_report(pvr_report_id_pk) NOT VALID;
 [   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pvr_report_id_fk_fkey;
       public          postgres    false    228    224    3022                       2606    21763 2   pvr_vr_detail pvr_vr_detail_pvr_sent_to_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pvr_sent_to_id_fk_fkey FOREIGN KEY (pvr_sent_to_id_fk) REFERENCES public.pvr_user_profile(profile_id_pk) NOT VALID;
 \   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pvr_sent_to_id_fk_fkey;
       public          postgres    false    228    3026    226                       2606    21768 ,   pvr_vr_detail pvr_vr_detail_pvr_type_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pvr_type_fk_fkey FOREIGN KEY (pvr_type_fk) REFERENCES public.pvr_master_defence("df_type_id_pk ") NOT VALID;
 V   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pvr_type_fk_fkey;
       public          postgres    false    2994    228    210                       2606    21773 /   pvr_vr_detail pvr_vr_detail_pvr_with_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pvr_with_id_fk_fkey FOREIGN KEY (pvr_with_id_fk) REFERENCES public.pvr_with(pvr_with_id_pk) NOT VALID;
 Y   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pvr_with_id_fk_fkey;
       public          postgres    false    3032    229    228                       2606    21778 .   pvr_vr_detail pvr_vr_detail_receipt_no_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_receipt_no_fk_fkey FOREIGN KEY (receipt_no_fk) REFERENCES public.pvr_receipt_no(receipt_no) NOT VALID;
 X   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_receipt_no_fk_fkey;
       public          postgres    false    3018    222    228            	           2606    21783     pvr_with pvr_with_pvr_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_with
    ADD CONSTRAINT pvr_with_pvr_id_fk_fkey FOREIGN KEY (pvr_id_fk) REFERENCES public.pvr_vr_detail(pvr_id_pk) NOT VALID;
 J   ALTER TABLE ONLY public.pvr_with DROP CONSTRAINT pvr_with_pvr_id_fk_fkey;
       public          postgres    false    228    229    3030            �           2606    21788    pvr_check_first_user user_id_fk    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_check_first_user
    ADD CONSTRAINT user_id_fk FOREIGN KEY (user_id_pk) REFERENCES public.pvr_login(login_id_pk);
 I   ALTER TABLE ONLY public.pvr_check_first_user DROP CONSTRAINT user_id_fk;
       public          postgres    false    203    208    2990            �      x������ � �      �      x������ � �      �      x������ � �      �      x�3�4�4������ �V      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �   X   x��;�  �c��4�<�K[�1�x�M�3��\v�[<�x�CG�Iڜ��u��Tv���OGE�f�@3�tD�������Z_��`      �   -   x�3�tO�K-J��2��wr�u�2�N\&���\���!\1z\\\ ���      �   3   x�3��K,��2�t�,J�/JN�2�t,ʭ�2����SpIMK�
��qqq <      �   5   x�3�Rvu���2�9��8���$�0�2�tt��X F��� c��      �   C   x�3��ws�tvR��Sp�prw�4�2�ttq����s�Qp�	�tQ�ut1C\9��b���� �t�      �      x�34���r��4��464����� 3��      �   $   x�3�.I,IUp�/+�2�tN�+)J́pc���� �N	|      �   #   x�3��M�I�2�tK�1�9�K2R���b���� |k�      �   *   x�3�t�	�tQ�ut1C\���<�]9��b���� ���      �      x������ � �      �      x������ � �      �      x�3��wQpr�sw������ 0�2      �      x������ � �      �   0  x�uQ�n� =�������4�J9XM{���M0Rl���}g�Yj�xü�f�ʊ�Ƒ�Kn�>���ʬ���ԏ�ܢmϺ�OR�E�AM(�I�]L�KA���gw�=��^� �p��m���a��vc�N�) ~8�	����+=EòX�O�w;kݷ�W���u�_��@`��b�_���{�h2I����j�9�M�^��Q�<��J, l�\UlVlp�0 ��� #��]p��:���n�����D�p7|in���0����e��`q�yݲr.�&;��˧�*���!��l��      �      x������ � �      �      x������ � �      �      x������ � �      �      x�3�4A�=... ��      �   9   x�3�LLJvH�M���K����wV��@��q�gIjq	�!W� �o�      �      x�3�4�4�4����� ��      �      x������ � �      �      x������ � �     