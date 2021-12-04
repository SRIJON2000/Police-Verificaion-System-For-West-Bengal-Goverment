PGDMP     "    -                y            PVR    13.3    13.3 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    62997    PVR    DATABASE     a   CREATE DATABASE "PVR" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_India.1252';
    DROP DATABASE "PVR";
                postgres    false            �            1259    62998    pvr_audit_log    TABLE     f  CREATE TABLE public.pvr_audit_log (
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
       public         heap    postgres    false            �            1259    63004    pvr_candidate_details    TABLE     `  CREATE TABLE public.pvr_candidate_details (
    candidate_id_pk bigint NOT NULL,
    reference_no_fk bigint NOT NULL,
    employer_id_fk bigint NOT NULL,
    profile_id_fk bigint,
    candidate_f_name character varying(50) NOT NULL,
    candidate_m_name character varying(50),
    candidate_l_name character varying(50) NOT NULL,
    candidate_gender_id_fk bigint NOT NULL,
    candidate_caste_id_fk bigint NOT NULL,
    candidate_aadhaar_no numeric(12,0) NOT NULL,
    candidate_house_no1 character varying(50) NOT NULL,
    candidate_street1 character varying(100) NOT NULL,
    candidate_landmark1 character varying(50) NOT NULL,
    candidate_city1 character varying NOT NULL,
    candidate_post_office1 character varying NOT NULL,
    candidate_police_station_id1_fk bigint NOT NULL,
    candidate_pin1_fk bigint NOT NULL,
    candidate_district_id1_fk bigint NOT NULL,
    candidate_photo_path character varying(80),
    candidate_defence_type_id_fk bigint NOT NULL,
    candidate_house_no2 character varying NOT NULL,
    candidate_street2 character varying(100) NOT NULL,
    candidate_landmark2 character varying NOT NULL,
    candidate_city2 character varying NOT NULL,
    candidate_post_office2 character varying NOT NULL,
    candidate_police_station_id2_fk bigint NOT NULL,
    candidate_pin2_fk bigint NOT NULL,
    candidate_district_id2_fk bigint NOT NULL
);
 )   DROP TABLE public.pvr_candidate_details;
       public         heap    postgres    false            �            1259    63010    pvr_candidate_profile    TABLE       CREATE TABLE public.pvr_candidate_profile (
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
       public         heap    postgres    false            �            1259    63016    pvr_check_first_user    TABLE     �   CREATE TABLE public.pvr_check_first_user (
    user_id_pk bigint NOT NULL,
    check_if_first_user integer NOT NULL,
    check_profile_updated_once integer NOT NULL
);
 (   DROP TABLE public.pvr_check_first_user;
       public         heap    postgres    false            �            1259    63019    pvr_employer    TABLE       CREATE TABLE public.pvr_employer (
    employer_id_pk bigint NOT NULL,
    profile_id_fk bigint,
    employer_name character varying(50) NOT NULL,
    employer_add1 character varying(50) NOT NULL,
    employer_add2 character varying(50) NOT NULL,
    district_id_fk bigint
);
     DROP TABLE public.pvr_employer;
       public         heap    postgres    false            �            1259    63022    pvr_employer_profile    TABLE     �  CREATE TABLE public.pvr_employer_profile (
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
       public         heap    postgres    false            �            1259    63025    pvr_final_status    TABLE     �   CREATE TABLE public.pvr_final_status (
    pvr_final_status_id_pk bigint NOT NULL,
    final_status_name character varying(50) NOT NULL
);
 $   DROP TABLE public.pvr_final_status;
       public         heap    postgres    false            �            1259    63028 
   pvr_issues    TABLE     )  CREATE TABLE public.pvr_issues (
    issue_id_pk bigint NOT NULL,
    name character varying(100) NOT NULL,
    email character varying(100) NOT NULL,
    rating numeric NOT NULL,
    description text NOT NULL,
    timstamp timestamp without time zone NOT NULL,
    login_id_fk bigint NOT NULL
);
    DROP TABLE public.pvr_issues;
       public         heap    postgres    false            �            1259    63034 	   pvr_login    TABLE     j  CREATE TABLE public.pvr_login (
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
       public         heap    postgres    false            �            1259    63040    pvr_master_caste    TABLE     y   CREATE TABLE public.pvr_master_caste (
    caste_id_pk bigint NOT NULL,
    caste_name character varying(50) NOT NULL
);
 $   DROP TABLE public.pvr_master_caste;
       public         heap    postgres    false            �            1259    63043    pvr_master_defence    TABLE     z   CREATE TABLE public.pvr_master_defence (
    df_type_id_pk bigint NOT NULL,
    df_type character varying(50) NOT NULL
);
 &   DROP TABLE public.pvr_master_defence;
       public         heap    postgres    false            �            1259    63046    pvr_master_department    TABLE     �   CREATE TABLE public.pvr_master_department (
    dept_id_pk bigint NOT NULL,
    dept_name character varying(50) NOT NULL,
    short_name character varying(15) NOT NULL,
    office_id_fk bigint NOT NULL
);
 )   DROP TABLE public.pvr_master_department;
       public         heap    postgres    false            �            1259    63049    pvr_master_designation    TABLE     �   CREATE TABLE public.pvr_master_designation (
    desig_id_pk bigint NOT NULL,
    desig_name character varying(50) NOT NULL,
    dept_id_fk bigint NOT NULL
);
 *   DROP TABLE public.pvr_master_designation;
       public         heap    postgres    false            �            1259    63052    pvr_master_district    TABLE     �   CREATE TABLE public.pvr_master_district (
    district_id_pk bigint NOT NULL,
    district_name character varying(50) NOT NULL,
    state_id_fk bigint NOT NULL,
    dist_lg_code bigint,
    district_name_code character varying(20)
);
 '   DROP TABLE public.pvr_master_district;
       public         heap    postgres    false            �            1259    63055    pvr_master_employer_type    TABLE        CREATE TABLE public.pvr_master_employer_type (
    type_id_pk bigint NOT NULL,
    type_name character varying(50) NOT NULL
);
 ,   DROP TABLE public.pvr_master_employer_type;
       public         heap    postgres    false            �            1259    63058    pvr_master_gender    TABLE     |   CREATE TABLE public.pvr_master_gender (
    gender_id_pk bigint NOT NULL,
    gender_name character varying(20) NOT NULL
);
 %   DROP TABLE public.pvr_master_gender;
       public         heap    postgres    false            �            1259    63061    pvr_master_notification    TABLE     �   CREATE TABLE public.pvr_master_notification (
    notification_id_pk bigint NOT NULL,
    notification_text character varying(100) NOT NULL
);
 +   DROP TABLE public.pvr_master_notification;
       public         heap    postgres    false            �            1259    63064    pvr_master_office    TABLE     �   CREATE TABLE public.pvr_master_office (
    office_id_pk bigint NOT NULL,
    office_name character varying(50) NOT NULL,
    district_id_fk bigint NOT NULL
);
 %   DROP TABLE public.pvr_master_office;
       public         heap    postgres    false            �            1259    63067    pvr_master_pincode    TABLE     �   CREATE TABLE public.pvr_master_pincode (
    pincode_id_pk bigint NOT NULL,
    pincode_no bigint NOT NULL,
    district_id_fk bigint NOT NULL
);
 &   DROP TABLE public.pvr_master_pincode;
       public         heap    postgres    false            �            1259    63070    pvr_master_policestation    TABLE     �   CREATE TABLE public.pvr_master_policestation (
    ps_id_pk bigint NOT NULL,
    ps_name character varying(50) NOT NULL,
    district_id_fk bigint NOT NULL
);
 ,   DROP TABLE public.pvr_master_policestation;
       public         heap    postgres    false            �            1259    63073    pvr_master_sent_to    TABLE     z   CREATE TABLE public.pvr_master_sent_to (
    sent_to_id_pk bigint NOT NULL,
    sent_to character varying(50) NOT NULL
);
 &   DROP TABLE public.pvr_master_sent_to;
       public         heap    postgres    false            �            1259    63076    pvr_master_state    TABLE     �   CREATE TABLE public.pvr_master_state (
    state_id_pk bigint NOT NULL,
    state_name character varying(50) NOT NULL,
    state_name_code character varying(20)
);
 $   DROP TABLE public.pvr_master_state;
       public         heap    postgres    false            �            1259    63079    pvr_memo    TABLE     �   CREATE TABLE public.pvr_memo (
    memo_id_pk bigint NOT NULL,
    memo_no character varying(50) NOT NULL,
    issue_date date NOT NULL,
    issued_by_dept_id_fk bigint NOT NULL
);
    DROP TABLE public.pvr_memo;
       public         heap    postgres    false            �            1259    63082    pvr_privilege    TABLE     '  CREATE TABLE public.pvr_privilege (
    privilege_id_pk bigint NOT NULL,
    "parent " integer NOT NULL,
    link character varying(70) NOT NULL,
    "order" integer NOT NULL,
    page_name character varying(70) NOT NULL,
    active_status numeric NOT NULL,
    view_sidebar numeric NOT NULL
);
 !   DROP TABLE public.pvr_privilege;
       public         heap    postgres    false            �            1259    63088    pvr_receipt_no    TABLE     �   CREATE TABLE public.pvr_receipt_no (
    receipt_id_pk bigint NOT NULL,
    receipt_date date NOT NULL,
    receipt_no character varying(20) NOT NULL
);
 "   DROP TABLE public.pvr_receipt_no;
       public         heap    postgres    false            �            1259    63091    pvr_reference_no    TABLE     �   CREATE TABLE public.pvr_reference_no (
    ref_no_pk bigint NOT NULL,
    receipt_id_fk bigint NOT NULL,
    ref_date date NOT NULL
);
 $   DROP TABLE public.pvr_reference_no;
       public         heap    postgres    false            �            1259    63094 
   pvr_report    TABLE     .  CREATE TABLE public.pvr_report (
    pvr_report_id_pk bigint NOT NULL,
    ref_no_fk bigint NOT NULL,
    receipt_id_fk bigint NOT NULL,
    pvr_report_no character varying(50) NOT NULL,
    pvr_id_fk bigint NOT NULL,
    issue_date date NOT NULL,
    pvr_report_path character varying(60) NOT NULL
);
    DROP TABLE public.pvr_report;
       public         heap    postgres    false            �            1259    63097    pvr_trans_notification    TABLE       CREATE TABLE public.pvr_trans_notification (
    notification_seq_id_pk bigint NOT NULL,
    login_id_fk bigint,
    notification_id_fk bigint,
    notification_message character varying(150),
    seen_status bigint,
    date date,
    "time" timestamp with time zone
);
 *   DROP TABLE public.pvr_trans_notification;
       public         heap    postgres    false            �            1259    63100    pvr_user_privilege    TABLE     �   CREATE TABLE public.pvr_user_privilege (
    user_priv_id_pk bigint NOT NULL,
    privilege_id_fk bigint NOT NULL,
    active_status integer NOT NULL,
    user_type_id_fk bigint NOT NULL
);
 &   DROP TABLE public.pvr_user_privilege;
       public         heap    postgres    false            �            1259    63103    pvr_user_profile    TABLE     C  CREATE TABLE public.pvr_user_profile (
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
       public         heap    postgres    false            �            1259    63106    pvr_user_type    TABLE     �   CREATE TABLE public.pvr_user_type (
    user_type_id_pk bigint NOT NULL,
    designation_id_fk bigint NOT NULL,
    active_status numeric NOT NULL,
    user_level integer NOT NULL
);
 !   DROP TABLE public.pvr_user_type;
       public         heap    postgres    false            �            1259    63112    pvr_vr_detail    TABLE     b  CREATE TABLE public.pvr_vr_detail (
    pvr_id_pk bigint NOT NULL,
    receipt_id_fk bigint NOT NULL,
    candidate_id_fk bigint NOT NULL,
    application_date date NOT NULL,
    pvr_type_fk bigint NOT NULL,
    memo_id_fk bigint NOT NULL,
    pvr_with_id_fk bigint NOT NULL,
    pvr_final_status_id_fk bigint NOT NULL,
    remarks text NOT NULL,
    pvr_report_id_fk bigint,
    district_id_fk bigint NOT NULL,
    sent_to_id_fk bigint,
    ocvr_approval bigint NOT NULL,
    adm_approval bigint NOT NULL,
    ocvr_unverified_approval bigint NOT NULL,
    ocvr_verified_nondefence_approval bigint NOT NULL
);
 !   DROP TABLE public.pvr_vr_detail;
       public         heap    postgres    false            �            1259    63118    pvr_with    TABLE     �   CREATE TABLE public.pvr_with (
    pvr_with_id_pk bigint NOT NULL,
    pvr_with_status character varying(50) NOT NULL,
    pvr_with_date date NOT NULL
);
    DROP TABLE public.pvr_with;
       public         heap    postgres    false            �          0    62998    pvr_audit_log 
   TABLE DATA           z   COPY public.pvr_audit_log (audit_id_pk, section, action, request, comment, ip_addr, login_id_fk, "timestamp") FROM stdin;
    public          postgres    false    200   ��       �          0    63004    pvr_candidate_details 
   TABLE DATA           �  COPY public.pvr_candidate_details (candidate_id_pk, reference_no_fk, employer_id_fk, profile_id_fk, candidate_f_name, candidate_m_name, candidate_l_name, candidate_gender_id_fk, candidate_caste_id_fk, candidate_aadhaar_no, candidate_house_no1, candidate_street1, candidate_landmark1, candidate_city1, candidate_post_office1, candidate_police_station_id1_fk, candidate_pin1_fk, candidate_district_id1_fk, candidate_photo_path, candidate_defence_type_id_fk, candidate_house_no2, candidate_street2, candidate_landmark2, candidate_city2, candidate_post_office2, candidate_police_station_id2_fk, candidate_pin2_fk, candidate_district_id2_fk) FROM stdin;
    public          postgres    false    201   ��       �          0    63010    pvr_candidate_profile 
   TABLE DATA           �  COPY public.pvr_candidate_profile (profile_id_pk, candidate_father_name, candidate_mother_name, candidate_nationality, candidate_dob, candidate_school_name, candidate_school_address, candidate_school_district_id_fk, "candidate_college_name ", candidate_college_address, candidate_college_district_id_fk, blood_group, candidate_school_pin_id_fk, candidate_college_pin_id_fk) FROM stdin;
    public          postgres    false    202   ��       �          0    63016    pvr_check_first_user 
   TABLE DATA           k   COPY public.pvr_check_first_user (user_id_pk, check_if_first_user, check_profile_updated_once) FROM stdin;
    public          postgres    false    203   �       �          0    63019    pvr_employer 
   TABLE DATA           �   COPY public.pvr_employer (employer_id_pk, profile_id_fk, employer_name, employer_add1, employer_add2, district_id_fk) FROM stdin;
    public          postgres    false    204   ,�       �          0    63022    pvr_employer_profile 
   TABLE DATA           �   COPY public.pvr_employer_profile (profile_id_pk, employer_district_id_fk, employer_pincode_fk, employer_type_id_fk, employer_sender_name, employer_sender_designation, employer_email, employer_contact) FROM stdin;
    public          postgres    false    205   ��       �          0    63025    pvr_final_status 
   TABLE DATA           U   COPY public.pvr_final_status (pvr_final_status_id_pk, final_status_name) FROM stdin;
    public          postgres    false    206   ��       �          0    63028 
   pvr_issues 
   TABLE DATA           j   COPY public.pvr_issues (issue_id_pk, name, email, rating, description, timstamp, login_id_fk) FROM stdin;
    public          postgres    false    207   �       �          0    63034 	   pvr_login 
   TABLE DATA           �   COPY public.pvr_login (username, password, user_type_id_fk, location_code, login_id_pk, active_status, dept_id_fk, office_id_fk, desig_id_fk) FROM stdin;
    public          postgres    false    208   5�       �          0    63040    pvr_master_caste 
   TABLE DATA           C   COPY public.pvr_master_caste (caste_id_pk, caste_name) FROM stdin;
    public          postgres    false    209   ��       �          0    63043    pvr_master_defence 
   TABLE DATA           D   COPY public.pvr_master_defence (df_type_id_pk, df_type) FROM stdin;
    public          postgres    false    210   ��       �          0    63046    pvr_master_department 
   TABLE DATA           `   COPY public.pvr_master_department (dept_id_pk, dept_name, short_name, office_id_fk) FROM stdin;
    public          postgres    false    211   N�       �          0    63049    pvr_master_designation 
   TABLE DATA           U   COPY public.pvr_master_designation (desig_id_pk, desig_name, dept_id_fk) FROM stdin;
    public          postgres    false    212   ��       �          0    63052    pvr_master_district 
   TABLE DATA           {   COPY public.pvr_master_district (district_id_pk, district_name, state_id_fk, dist_lg_code, district_name_code) FROM stdin;
    public          postgres    false    213   ��       �          0    63055    pvr_master_employer_type 
   TABLE DATA           I   COPY public.pvr_master_employer_type (type_id_pk, type_name) FROM stdin;
    public          postgres    false    214   �      �          0    63058    pvr_master_gender 
   TABLE DATA           F   COPY public.pvr_master_gender (gender_id_pk, gender_name) FROM stdin;
    public          postgres    false    215   �      �          0    63061    pvr_master_notification 
   TABLE DATA           X   COPY public.pvr_master_notification (notification_id_pk, notification_text) FROM stdin;
    public          postgres    false    216         �          0    63064    pvr_master_office 
   TABLE DATA           V   COPY public.pvr_master_office (office_id_pk, office_name, district_id_fk) FROM stdin;
    public          postgres    false    217   |      �          0    63067    pvr_master_pincode 
   TABLE DATA           W   COPY public.pvr_master_pincode (pincode_id_pk, pincode_no, district_id_fk) FROM stdin;
    public          postgres    false    218   �      �          0    63070    pvr_master_policestation 
   TABLE DATA           U   COPY public.pvr_master_policestation (ps_id_pk, ps_name, district_id_fk) FROM stdin;
    public          postgres    false    219   �      �          0    63073    pvr_master_sent_to 
   TABLE DATA           D   COPY public.pvr_master_sent_to (sent_to_id_pk, sent_to) FROM stdin;
    public          postgres    false    220   �      �          0    63076    pvr_master_state 
   TABLE DATA           T   COPY public.pvr_master_state (state_id_pk, state_name, state_name_code) FROM stdin;
    public          postgres    false    221   $      �          0    63079    pvr_memo 
   TABLE DATA           Y   COPY public.pvr_memo (memo_id_pk, memo_no, issue_date, issued_by_dept_id_fk) FROM stdin;
    public          postgres    false    222   �      �          0    63082    pvr_privilege 
   TABLE DATA           z   COPY public.pvr_privilege (privilege_id_pk, "parent ", link, "order", page_name, active_status, view_sidebar) FROM stdin;
    public          postgres    false    223   �      �          0    63088    pvr_receipt_no 
   TABLE DATA           Q   COPY public.pvr_receipt_no (receipt_id_pk, receipt_date, receipt_no) FROM stdin;
    public          postgres    false    224   �      �          0    63091    pvr_reference_no 
   TABLE DATA           N   COPY public.pvr_reference_no (ref_no_pk, receipt_id_fk, ref_date) FROM stdin;
    public          postgres    false    225   �      �          0    63094 
   pvr_report 
   TABLE DATA           �   COPY public.pvr_report (pvr_report_id_pk, ref_no_fk, receipt_id_fk, pvr_report_no, pvr_id_fk, issue_date, pvr_report_path) FROM stdin;
    public          postgres    false    226         �          0    63097    pvr_trans_notification 
   TABLE DATA           �   COPY public.pvr_trans_notification (notification_seq_id_pk, login_id_fk, notification_id_fk, notification_message, seen_status, date, "time") FROM stdin;
    public          postgres    false    227   8      �          0    63100    pvr_user_privilege 
   TABLE DATA           n   COPY public.pvr_user_privilege (user_priv_id_pk, privilege_id_fk, active_status, user_type_id_fk) FROM stdin;
    public          postgres    false    228   U      �          0    63103    pvr_user_profile 
   TABLE DATA           �   COPY public.pvr_user_profile (profile_id_pk, username, first_name, middle_name, last_name, mobille, "email ", district_id_fk, designation_id_fk, office_id_fk, department_id_fk, signature_path, user_type_id_fk) FROM stdin;
    public          postgres    false    229   w      �          0    63106    pvr_user_type 
   TABLE DATA           f   COPY public.pvr_user_type (user_type_id_pk, designation_id_fk, active_status, user_level) FROM stdin;
    public          postgres    false    230   �      �          0    63112    pvr_vr_detail 
   TABLE DATA           9  COPY public.pvr_vr_detail (pvr_id_pk, receipt_id_fk, candidate_id_fk, application_date, pvr_type_fk, memo_id_fk, pvr_with_id_fk, pvr_final_status_id_fk, remarks, pvr_report_id_fk, district_id_fk, sent_to_id_fk, ocvr_approval, adm_approval, ocvr_unverified_approval, ocvr_verified_nondefence_approval) FROM stdin;
    public          postgres    false    231   �      �          0    63118    pvr_with 
   TABLE DATA           R   COPY public.pvr_with (pvr_with_id_pk, pvr_with_status, pvr_with_date) FROM stdin;
    public          postgres    false    232   
      �           2606    63122     pvr_audit_log pvr_audit_log_pkey 
   CONSTRAINT     g   ALTER TABLE ONLY public.pvr_audit_log
    ADD CONSTRAINT pvr_audit_log_pkey PRIMARY KEY (audit_id_pk);
 J   ALTER TABLE ONLY public.pvr_audit_log DROP CONSTRAINT pvr_audit_log_pkey;
       public            postgres    false    200            �           2606    63124 0   pvr_candidate_details pvr_candidate_details_pkey 
   CONSTRAINT     {   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_pkey PRIMARY KEY (candidate_id_pk);
 Z   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_pkey;
       public            postgres    false    201            �           2606    63126 0   pvr_candidate_profile pvr_candidate_profile_pkey 
   CONSTRAINT     y   ALTER TABLE ONLY public.pvr_candidate_profile
    ADD CONSTRAINT pvr_candidate_profile_pkey PRIMARY KEY (profile_id_pk);
 Z   ALTER TABLE ONLY public.pvr_candidate_profile DROP CONSTRAINT pvr_candidate_profile_pkey;
       public            postgres    false    202            �           2606    63128 .   pvr_check_first_user pvr_check_first_user_pkey 
   CONSTRAINT     t   ALTER TABLE ONLY public.pvr_check_first_user
    ADD CONSTRAINT pvr_check_first_user_pkey PRIMARY KEY (user_id_pk);
 X   ALTER TABLE ONLY public.pvr_check_first_user DROP CONSTRAINT pvr_check_first_user_pkey;
       public            postgres    false    203            �           2606    63130    pvr_employer pvr_employer_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.pvr_employer
    ADD CONSTRAINT pvr_employer_pkey PRIMARY KEY (employer_id_pk);
 H   ALTER TABLE ONLY public.pvr_employer DROP CONSTRAINT pvr_employer_pkey;
       public            postgres    false    204            �           2606    63132 .   pvr_employer_profile pvr_employer_profile_pkey 
   CONSTRAINT     w   ALTER TABLE ONLY public.pvr_employer_profile
    ADD CONSTRAINT pvr_employer_profile_pkey PRIMARY KEY (profile_id_pk);
 X   ALTER TABLE ONLY public.pvr_employer_profile DROP CONSTRAINT pvr_employer_profile_pkey;
       public            postgres    false    205            �           2606    63134 &   pvr_final_status pvr_final_status_pkey 
   CONSTRAINT     x   ALTER TABLE ONLY public.pvr_final_status
    ADD CONSTRAINT pvr_final_status_pkey PRIMARY KEY (pvr_final_status_id_pk);
 P   ALTER TABLE ONLY public.pvr_final_status DROP CONSTRAINT pvr_final_status_pkey;
       public            postgres    false    206            �           2606    63136    pvr_issues pvr_issues_pkey 
   CONSTRAINT     a   ALTER TABLE ONLY public.pvr_issues
    ADD CONSTRAINT pvr_issues_pkey PRIMARY KEY (issue_id_pk);
 D   ALTER TABLE ONLY public.pvr_issues DROP CONSTRAINT pvr_issues_pkey;
       public            postgres    false    207            �           2606    63138    pvr_login pvr_login_pkey 
   CONSTRAINT     _   ALTER TABLE ONLY public.pvr_login
    ADD CONSTRAINT pvr_login_pkey PRIMARY KEY (login_id_pk);
 B   ALTER TABLE ONLY public.pvr_login DROP CONSTRAINT pvr_login_pkey;
       public            postgres    false    208            �           2606    63140 &   pvr_master_caste pvr_master_caste_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.pvr_master_caste
    ADD CONSTRAINT pvr_master_caste_pkey PRIMARY KEY (caste_id_pk);
 P   ALTER TABLE ONLY public.pvr_master_caste DROP CONSTRAINT pvr_master_caste_pkey;
       public            postgres    false    209            �           2606    63142 *   pvr_master_defence pvr_master_defence_pkey 
   CONSTRAINT     s   ALTER TABLE ONLY public.pvr_master_defence
    ADD CONSTRAINT pvr_master_defence_pkey PRIMARY KEY (df_type_id_pk);
 T   ALTER TABLE ONLY public.pvr_master_defence DROP CONSTRAINT pvr_master_defence_pkey;
       public            postgres    false    210            �           2606    63144 0   pvr_master_department pvr_master_department_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.pvr_master_department
    ADD CONSTRAINT pvr_master_department_pkey PRIMARY KEY (dept_id_pk);
 Z   ALTER TABLE ONLY public.pvr_master_department DROP CONSTRAINT pvr_master_department_pkey;
       public            postgres    false    211            �           2606    63146 2   pvr_master_designation pvr_master_designation_pkey 
   CONSTRAINT     y   ALTER TABLE ONLY public.pvr_master_designation
    ADD CONSTRAINT pvr_master_designation_pkey PRIMARY KEY (desig_id_pk);
 \   ALTER TABLE ONLY public.pvr_master_designation DROP CONSTRAINT pvr_master_designation_pkey;
       public            postgres    false    212            �           2606    63148 ,   pvr_master_district pvr_master_district_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.pvr_master_district
    ADD CONSTRAINT pvr_master_district_pkey PRIMARY KEY (district_id_pk);
 V   ALTER TABLE ONLY public.pvr_master_district DROP CONSTRAINT pvr_master_district_pkey;
       public            postgres    false    213            �           2606    63150 6   pvr_master_employer_type pvr_master_employer_type_pkey 
   CONSTRAINT     |   ALTER TABLE ONLY public.pvr_master_employer_type
    ADD CONSTRAINT pvr_master_employer_type_pkey PRIMARY KEY (type_id_pk);
 `   ALTER TABLE ONLY public.pvr_master_employer_type DROP CONSTRAINT pvr_master_employer_type_pkey;
       public            postgres    false    214            �           2606    63152 (   pvr_master_gender pvr_master_gender_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.pvr_master_gender
    ADD CONSTRAINT pvr_master_gender_pkey PRIMARY KEY (gender_id_pk);
 R   ALTER TABLE ONLY public.pvr_master_gender DROP CONSTRAINT pvr_master_gender_pkey;
       public            postgres    false    215            �           2606    63154 4   pvr_master_notification pvr_master_notification_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_notification
    ADD CONSTRAINT pvr_master_notification_pkey PRIMARY KEY (notification_id_pk);
 ^   ALTER TABLE ONLY public.pvr_master_notification DROP CONSTRAINT pvr_master_notification_pkey;
       public            postgres    false    216            �           2606    63156 (   pvr_master_office pvr_master_office_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.pvr_master_office
    ADD CONSTRAINT pvr_master_office_pkey PRIMARY KEY (office_id_pk);
 R   ALTER TABLE ONLY public.pvr_master_office DROP CONSTRAINT pvr_master_office_pkey;
       public            postgres    false    217            �           2606    63158 *   pvr_master_pincode pvr_master_pincode_pkey 
   CONSTRAINT     s   ALTER TABLE ONLY public.pvr_master_pincode
    ADD CONSTRAINT pvr_master_pincode_pkey PRIMARY KEY (pincode_id_pk);
 T   ALTER TABLE ONLY public.pvr_master_pincode DROP CONSTRAINT pvr_master_pincode_pkey;
       public            postgres    false    218            �           2606    63160 6   pvr_master_policestation pvr_master_policestation_pkey 
   CONSTRAINT     z   ALTER TABLE ONLY public.pvr_master_policestation
    ADD CONSTRAINT pvr_master_policestation_pkey PRIMARY KEY (ps_id_pk);
 `   ALTER TABLE ONLY public.pvr_master_policestation DROP CONSTRAINT pvr_master_policestation_pkey;
       public            postgres    false    219            �           2606    63162 *   pvr_master_sent_to pvr_master_sent_to_pkey 
   CONSTRAINT     s   ALTER TABLE ONLY public.pvr_master_sent_to
    ADD CONSTRAINT pvr_master_sent_to_pkey PRIMARY KEY (sent_to_id_pk);
 T   ALTER TABLE ONLY public.pvr_master_sent_to DROP CONSTRAINT pvr_master_sent_to_pkey;
       public            postgres    false    220            �           2606    63164 &   pvr_master_state pvr_master_state_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.pvr_master_state
    ADD CONSTRAINT pvr_master_state_pkey PRIMARY KEY (state_id_pk);
 P   ALTER TABLE ONLY public.pvr_master_state DROP CONSTRAINT pvr_master_state_pkey;
       public            postgres    false    221            �           2606    63166    pvr_memo pvr_memo_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.pvr_memo
    ADD CONSTRAINT pvr_memo_pkey PRIMARY KEY (memo_id_pk);
 @   ALTER TABLE ONLY public.pvr_memo DROP CONSTRAINT pvr_memo_pkey;
       public            postgres    false    222            �           2606    63168     pvr_privilege pvr_privilege_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.pvr_privilege
    ADD CONSTRAINT pvr_privilege_pkey PRIMARY KEY (privilege_id_pk);
 J   ALTER TABLE ONLY public.pvr_privilege DROP CONSTRAINT pvr_privilege_pkey;
       public            postgres    false    223            �           2606    63170 "   pvr_receipt_no pvr_receipt_no_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.pvr_receipt_no
    ADD CONSTRAINT pvr_receipt_no_pkey PRIMARY KEY (receipt_id_pk);
 L   ALTER TABLE ONLY public.pvr_receipt_no DROP CONSTRAINT pvr_receipt_no_pkey;
       public            postgres    false    224            �           2606    63172 &   pvr_reference_no pvr_reference_no_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.pvr_reference_no
    ADD CONSTRAINT pvr_reference_no_pkey PRIMARY KEY (ref_no_pk);
 P   ALTER TABLE ONLY public.pvr_reference_no DROP CONSTRAINT pvr_reference_no_pkey;
       public            postgres    false    225            �           2606    63174    pvr_report pvr_report_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.pvr_report
    ADD CONSTRAINT pvr_report_pkey PRIMARY KEY (pvr_report_id_pk);
 D   ALTER TABLE ONLY public.pvr_report DROP CONSTRAINT pvr_report_pkey;
       public            postgres    false    226            �           2606    63176 2   pvr_trans_notification pvr_trans_notification_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.pvr_trans_notification
    ADD CONSTRAINT pvr_trans_notification_pkey PRIMARY KEY (notification_seq_id_pk);
 \   ALTER TABLE ONLY public.pvr_trans_notification DROP CONSTRAINT pvr_trans_notification_pkey;
       public            postgres    false    227            �           2606    63178 *   pvr_user_privilege pvr_user_privilege_pkey 
   CONSTRAINT     u   ALTER TABLE ONLY public.pvr_user_privilege
    ADD CONSTRAINT pvr_user_privilege_pkey PRIMARY KEY (user_priv_id_pk);
 T   ALTER TABLE ONLY public.pvr_user_privilege DROP CONSTRAINT pvr_user_privilege_pkey;
       public            postgres    false    228            �           2606    63180 &   pvr_user_profile pvr_user_profile_pkey 
   CONSTRAINT     o   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_pkey PRIMARY KEY (profile_id_pk);
 P   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_pkey;
       public            postgres    false    229            �           2606    63182     pvr_user_type pvr_user_type_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.pvr_user_type
    ADD CONSTRAINT pvr_user_type_pkey PRIMARY KEY (user_type_id_pk);
 J   ALTER TABLE ONLY public.pvr_user_type DROP CONSTRAINT pvr_user_type_pkey;
       public            postgres    false    230            �           2606    63184     pvr_vr_detail pvr_vr_detail_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pkey PRIMARY KEY (pvr_id_pk);
 J   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pkey;
       public            postgres    false    231            �           2606    63186    pvr_with pvr_with_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.pvr_with
    ADD CONSTRAINT pvr_with_pkey PRIMARY KEY (pvr_with_id_pk);
 @   ALTER TABLE ONLY public.pvr_with DROP CONSTRAINT pvr_with_pkey;
       public            postgres    false    232                       2606    63187 :   pvr_trans_notification fk_pvr_trans_notification_pvr_login    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_trans_notification
    ADD CONSTRAINT fk_pvr_trans_notification_pvr_login FOREIGN KEY (login_id_fk) REFERENCES public.pvr_login(login_id_pk);
 d   ALTER TABLE ONLY public.pvr_trans_notification DROP CONSTRAINT fk_pvr_trans_notification_pvr_login;
       public          postgres    false    227    208    3001                       2606    63192 H   pvr_trans_notification fk_pvr_trans_notification_pvr_master_notification    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_trans_notification
    ADD CONSTRAINT fk_pvr_trans_notification_pvr_master_notification FOREIGN KEY (notification_id_fk) REFERENCES public.pvr_master_notification(notification_id_pk);
 r   ALTER TABLE ONLY public.pvr_trans_notification DROP CONSTRAINT fk_pvr_trans_notification_pvr_master_notification;
       public          postgres    false    3017    227    216            �           2606    63197 ,   pvr_audit_log pvr_audit_log_login_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_audit_log
    ADD CONSTRAINT pvr_audit_log_login_id_fk_fkey FOREIGN KEY (login_id_fk) REFERENCES public.pvr_login(login_id_pk) NOT VALID;
 V   ALTER TABLE ONLY public.pvr_audit_log DROP CONSTRAINT pvr_audit_log_login_id_fk_fkey;
       public          postgres    false    200    208    3001            �           2606    63202 F   pvr_candidate_details pvr_candidate_details_candidate_caste_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_caste_id_fk_fkey FOREIGN KEY (candidate_caste_id_fk) REFERENCES public.pvr_master_caste(caste_id_pk) NOT VALID;
 p   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_caste_id_fk_fkey;
       public          postgres    false    201    209    3003            �           2606    63207 M   pvr_candidate_details pvr_candidate_details_candidate_defence_type_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_defence_type_id_fk_fkey FOREIGN KEY (candidate_defence_type_id_fk) REFERENCES public.pvr_master_defence(df_type_id_pk) NOT VALID;
 w   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_defence_type_id_fk_fkey;
       public          postgres    false    201    210    3005            �           2606    63212 J   pvr_candidate_details pvr_candidate_details_candidate_district_id1_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_district_id1_fk_fkey FOREIGN KEY (candidate_district_id1_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 t   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_district_id1_fk_fkey;
       public          postgres    false    201    213    3011            �           2606    63217 J   pvr_candidate_details pvr_candidate_details_candidate_district_id2_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_district_id2_fk_fkey FOREIGN KEY (candidate_district_id2_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 t   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_district_id2_fk_fkey;
       public          postgres    false    201    213    3011            �           2606    63222 G   pvr_candidate_details pvr_candidate_details_candidate_gender_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_gender_id_fk_fkey FOREIGN KEY (candidate_gender_id_fk) REFERENCES public.pvr_master_gender(gender_id_pk) NOT VALID;
 q   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_gender_id_fk_fkey;
       public          postgres    false    215    201    3015            �           2606    63227 B   pvr_candidate_details pvr_candidate_details_candidate_pin1_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_pin1_fk_fkey FOREIGN KEY (candidate_pin1_fk) REFERENCES public.pvr_master_pincode(pincode_id_pk) NOT VALID;
 l   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_pin1_fk_fkey;
       public          postgres    false    201    218    3021            �           2606    63232 B   pvr_candidate_details pvr_candidate_details_candidate_pin2_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_pin2_fk_fkey FOREIGN KEY (candidate_pin2_fk) REFERENCES public.pvr_master_pincode(pincode_id_pk) NOT VALID;
 l   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_pin2_fk_fkey;
       public          postgres    false    201    218    3021            �           2606    63237 P   pvr_candidate_details pvr_candidate_details_candidate_police_station_id1_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_police_station_id1_fk_fkey FOREIGN KEY (candidate_police_station_id1_fk) REFERENCES public.pvr_master_policestation(ps_id_pk) NOT VALID;
 z   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_police_station_id1_fk_fkey;
       public          postgres    false    201    219    3023            �           2606    63242 P   pvr_candidate_details pvr_candidate_details_candidate_police_station_id2_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_candidate_police_station_id2_fk_fkey FOREIGN KEY (candidate_police_station_id2_fk) REFERENCES public.pvr_master_policestation(ps_id_pk) NOT VALID;
 z   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_candidate_police_station_id2_fk_fkey;
       public          postgres    false    201    219    3023            �           2606    63247 ?   pvr_candidate_details pvr_candidate_details_employer_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_employer_id_fk_fkey FOREIGN KEY (employer_id_fk) REFERENCES public.pvr_employer(employer_id_pk) NOT VALID;
 i   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_employer_id_fk_fkey;
       public          postgres    false    201    204    2993            �           2606    63252 >   pvr_candidate_details pvr_candidate_details_profile_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_profile_id_fk_fkey FOREIGN KEY (profile_id_fk) REFERENCES public.pvr_candidate_profile(profile_id_pk) NOT VALID;
 h   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_profile_id_fk_fkey;
       public          postgres    false    201    202    2989            �           2606    63257 @   pvr_candidate_details pvr_candidate_details_reference_no_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_candidate_details
    ADD CONSTRAINT pvr_candidate_details_reference_no_fk_fkey FOREIGN KEY (reference_no_fk) REFERENCES public.pvr_reference_no(ref_no_pk) NOT VALID;
 j   ALTER TABLE ONLY public.pvr_candidate_details DROP CONSTRAINT pvr_candidate_details_reference_no_fk_fkey;
       public          postgres    false    201    225    3035            �           2606    63262 9   pvr_check_first_user pvr_check_first_user_user_id_pk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_check_first_user
    ADD CONSTRAINT pvr_check_first_user_user_id_pk_fkey FOREIGN KEY (user_id_pk) REFERENCES public.pvr_login(login_id_pk) NOT VALID;
 c   ALTER TABLE ONLY public.pvr_check_first_user DROP CONSTRAINT pvr_check_first_user_user_id_pk_fkey;
       public          postgres    false    203    208    3001            �           2606    63267 F   pvr_employer_profile pvr_employer_profile_employer_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_employer_profile
    ADD CONSTRAINT pvr_employer_profile_employer_district_id_fk_fkey FOREIGN KEY (employer_district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 p   ALTER TABLE ONLY public.pvr_employer_profile DROP CONSTRAINT pvr_employer_profile_employer_district_id_fk_fkey;
       public          postgres    false    213    205    3011            �           2606    63272 B   pvr_employer_profile pvr_employer_profile_employer_pincode_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_employer_profile
    ADD CONSTRAINT pvr_employer_profile_employer_pincode_fk_fkey FOREIGN KEY (employer_pincode_fk) REFERENCES public.pvr_master_pincode(pincode_id_pk) NOT VALID;
 l   ALTER TABLE ONLY public.pvr_employer_profile DROP CONSTRAINT pvr_employer_profile_employer_pincode_fk_fkey;
       public          postgres    false    218    205    3021            �           2606    63277 B   pvr_employer_profile pvr_employer_profile_employer_type_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_employer_profile
    ADD CONSTRAINT pvr_employer_profile_employer_type_id_fk_fkey FOREIGN KEY (employer_type_id_fk) REFERENCES public.pvr_master_employer_type(type_id_pk) NOT VALID;
 l   ALTER TABLE ONLY public.pvr_employer_profile DROP CONSTRAINT pvr_employer_profile_employer_type_id_fk_fkey;
       public          postgres    false    205    214    3013            �           2606    63282 ,   pvr_employer pvr_employer_profile_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_employer
    ADD CONSTRAINT pvr_employer_profile_id_fk_fkey FOREIGN KEY (profile_id_fk) REFERENCES public.pvr_employer_profile(profile_id_pk) NOT VALID;
 V   ALTER TABLE ONLY public.pvr_employer DROP CONSTRAINT pvr_employer_profile_id_fk_fkey;
       public          postgres    false    204    205    2995            �           2606    63287 &   pvr_issues pvr_issues_login_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_issues
    ADD CONSTRAINT pvr_issues_login_id_fk_fkey FOREIGN KEY (login_id_fk) REFERENCES public.pvr_login(login_id_pk) NOT VALID;
 P   ALTER TABLE ONLY public.pvr_issues DROP CONSTRAINT pvr_issues_login_id_fk_fkey;
       public          postgres    false    207    208    3001            �           2606    63292 #   pvr_login pvr_login_dept_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_login
    ADD CONSTRAINT pvr_login_dept_id_fk_fkey FOREIGN KEY (dept_id_fk) REFERENCES public.pvr_master_department(dept_id_pk) NOT VALID;
 M   ALTER TABLE ONLY public.pvr_login DROP CONSTRAINT pvr_login_dept_id_fk_fkey;
       public          postgres    false    211    208    3007            �           2606    63297 $   pvr_login pvr_login_desig_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_login
    ADD CONSTRAINT pvr_login_desig_id_fk_fkey FOREIGN KEY (desig_id_fk) REFERENCES public.pvr_master_designation(desig_id_pk) NOT VALID;
 N   ALTER TABLE ONLY public.pvr_login DROP CONSTRAINT pvr_login_desig_id_fk_fkey;
       public          postgres    false    208    212    3009            �           2606    63302 %   pvr_login pvr_login_office_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_login
    ADD CONSTRAINT pvr_login_office_id_fk_fkey FOREIGN KEY (office_id_fk) REFERENCES public.pvr_master_office(office_id_pk) NOT VALID;
 O   ALTER TABLE ONLY public.pvr_login DROP CONSTRAINT pvr_login_office_id_fk_fkey;
       public          postgres    false    208    217    3019                        2606    63307 (   pvr_login pvr_login_user_type_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_login
    ADD CONSTRAINT pvr_login_user_type_id_fk_fkey FOREIGN KEY (user_type_id_fk) REFERENCES public.pvr_user_type(user_type_id_pk) NOT VALID;
 R   ALTER TABLE ONLY public.pvr_login DROP CONSTRAINT pvr_login_user_type_id_fk_fkey;
       public          postgres    false    208    3045    230                       2606    63312 =   pvr_master_department pvr_master_department_office_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_department
    ADD CONSTRAINT pvr_master_department_office_id_fk_fkey FOREIGN KEY (office_id_fk) REFERENCES public.pvr_master_office(office_id_pk) NOT VALID;
 g   ALTER TABLE ONLY public.pvr_master_department DROP CONSTRAINT pvr_master_department_office_id_fk_fkey;
       public          postgres    false    3019    217    211                       2606    63317 =   pvr_master_designation pvr_master_designation_dept_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_designation
    ADD CONSTRAINT pvr_master_designation_dept_id_fk_fkey FOREIGN KEY (dept_id_fk) REFERENCES public.pvr_master_department(dept_id_pk) NOT VALID;
 g   ALTER TABLE ONLY public.pvr_master_designation DROP CONSTRAINT pvr_master_designation_dept_id_fk_fkey;
       public          postgres    false    3007    212    211                       2606    63322 8   pvr_master_district pvr_master_district_state_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_district
    ADD CONSTRAINT pvr_master_district_state_id_fk_fkey FOREIGN KEY (state_id_fk) REFERENCES public.pvr_master_state(state_id_pk) NOT VALID;
 b   ALTER TABLE ONLY public.pvr_master_district DROP CONSTRAINT pvr_master_district_state_id_fk_fkey;
       public          postgres    false    3027    213    221                       2606    63327 7   pvr_master_office pvr_master_office_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_office
    ADD CONSTRAINT pvr_master_office_district_id_fk_fkey FOREIGN KEY (district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 a   ALTER TABLE ONLY public.pvr_master_office DROP CONSTRAINT pvr_master_office_district_id_fk_fkey;
       public          postgres    false    3011    213    217                       2606    63332 9   pvr_master_pincode pvr_master_pincode_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_pincode
    ADD CONSTRAINT pvr_master_pincode_district_id_fk_fkey FOREIGN KEY (district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 c   ALTER TABLE ONLY public.pvr_master_pincode DROP CONSTRAINT pvr_master_pincode_district_id_fk_fkey;
       public          postgres    false    213    218    3011                       2606    63337 E   pvr_master_policestation pvr_master_policestation_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_master_policestation
    ADD CONSTRAINT pvr_master_policestation_district_id_fk_fkey FOREIGN KEY (district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 o   ALTER TABLE ONLY public.pvr_master_policestation DROP CONSTRAINT pvr_master_policestation_district_id_fk_fkey;
       public          postgres    false    219    213    3011                       2606    63342 +   pvr_memo pvr_memo_issued_by_dept_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_memo
    ADD CONSTRAINT pvr_memo_issued_by_dept_id_fk_fkey FOREIGN KEY (issued_by_dept_id_fk) REFERENCES public.pvr_master_department(dept_id_pk);
 U   ALTER TABLE ONLY public.pvr_memo DROP CONSTRAINT pvr_memo_issued_by_dept_id_fk_fkey;
       public          postgres    false    222    211    3007                       2606    63347 4   pvr_reference_no pvr_reference_no_receipt_no_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_reference_no
    ADD CONSTRAINT pvr_reference_no_receipt_no_fk_fkey FOREIGN KEY (receipt_id_fk) REFERENCES public.pvr_receipt_no(receipt_id_pk) NOT VALID;
 ^   ALTER TABLE ONLY public.pvr_reference_no DROP CONSTRAINT pvr_reference_no_receipt_no_fk_fkey;
       public          postgres    false    225    224    3033            	           2606    63352 $   pvr_report pvr_report_pvr_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_report
    ADD CONSTRAINT pvr_report_pvr_id_fk_fkey FOREIGN KEY (pvr_id_fk) REFERENCES public.pvr_vr_detail(pvr_id_pk) NOT VALID;
 N   ALTER TABLE ONLY public.pvr_report DROP CONSTRAINT pvr_report_pvr_id_fk_fkey;
       public          postgres    false    226    231    3047            
           2606    63357 (   pvr_report pvr_report_receipt_no_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_report
    ADD CONSTRAINT pvr_report_receipt_no_fk_fkey FOREIGN KEY (receipt_id_fk) REFERENCES public.pvr_receipt_no(receipt_id_pk) NOT VALID;
 R   ALTER TABLE ONLY public.pvr_report DROP CONSTRAINT pvr_report_receipt_no_fk_fkey;
       public          postgres    false    3033    224    226                       2606    63362 $   pvr_report pvr_report_ref_no_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_report
    ADD CONSTRAINT pvr_report_ref_no_fk_fkey FOREIGN KEY (ref_no_fk) REFERENCES public.pvr_reference_no(ref_no_pk) NOT VALID;
 N   ALTER TABLE ONLY public.pvr_report DROP CONSTRAINT pvr_report_ref_no_fk_fkey;
       public          postgres    false    3035    225    226                       2606    63367 :   pvr_user_privilege pvr_user_privilege_privilege_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_privilege
    ADD CONSTRAINT pvr_user_privilege_privilege_id_fk_fkey FOREIGN KEY (privilege_id_fk) REFERENCES public.pvr_privilege(privilege_id_pk) NOT VALID;
 d   ALTER TABLE ONLY public.pvr_user_privilege DROP CONSTRAINT pvr_user_privilege_privilege_id_fk_fkey;
       public          postgres    false    3031    223    228                       2606    63372 :   pvr_user_privilege pvr_user_privilege_user_type_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_privilege
    ADD CONSTRAINT pvr_user_privilege_user_type_id_fk_fkey FOREIGN KEY (user_type_id_fk) REFERENCES public.pvr_user_type(user_type_id_pk) NOT VALID;
 d   ALTER TABLE ONLY public.pvr_user_privilege DROP CONSTRAINT pvr_user_privilege_user_type_id_fk_fkey;
       public          postgres    false    228    3045    230                       2606    63377 7   pvr_user_profile pvr_user_profile_department_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_department_id_fk_fkey FOREIGN KEY (department_id_fk) REFERENCES public.pvr_master_department(dept_id_pk) NOT VALID;
 a   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_department_id_fk_fkey;
       public          postgres    false    211    229    3007                       2606    63382 8   pvr_user_profile pvr_user_profile_designation_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_designation_id_fk_fkey FOREIGN KEY (designation_id_fk) REFERENCES public.pvr_master_designation(desig_id_pk) NOT VALID;
 b   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_designation_id_fk_fkey;
       public          postgres    false    212    229    3009                       2606    63387 5   pvr_user_profile pvr_user_profile_district_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_district_id_fk_fkey FOREIGN KEY (district_id_fk) REFERENCES public.pvr_master_district(district_id_pk) NOT VALID;
 _   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_district_id_fk_fkey;
       public          postgres    false    213    3011    229                       2606    63392 3   pvr_user_profile pvr_user_profile_office_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_office_id_fk_fkey FOREIGN KEY (office_id_fk) REFERENCES public.pvr_master_office(office_id_pk) NOT VALID;
 ]   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_office_id_fk_fkey;
       public          postgres    false    217    3019    229                       2606    63397 6   pvr_user_profile pvr_user_profile_user_type_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_profile
    ADD CONSTRAINT pvr_user_profile_user_type_id_fk_fkey FOREIGN KEY (user_type_id_fk) REFERENCES public.pvr_user_type(user_type_id_pk) NOT VALID;
 `   ALTER TABLE ONLY public.pvr_user_profile DROP CONSTRAINT pvr_user_profile_user_type_id_fk_fkey;
       public          postgres    false    229    3045    230                       2606    63402 2   pvr_user_type pvr_user_type_designation_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_user_type
    ADD CONSTRAINT pvr_user_type_designation_id_fk_fkey FOREIGN KEY (designation_id_fk) REFERENCES public.pvr_master_designation(desig_id_pk) NOT VALID;
 \   ALTER TABLE ONLY public.pvr_user_type DROP CONSTRAINT pvr_user_type_designation_id_fk_fkey;
       public          postgres    false    230    212    3009                       2606    63407 0   pvr_vr_detail pvr_vr_detail_candidate_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_candidate_id_fk_fkey FOREIGN KEY (candidate_id_fk) REFERENCES public.pvr_candidate_details(candidate_id_pk) NOT VALID;
 Z   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_candidate_id_fk_fkey;
       public          postgres    false    201    231    2987                       2606    63412 +   pvr_vr_detail pvr_vr_detail_memo_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_memo_id_fk_fkey FOREIGN KEY (memo_id_fk) REFERENCES public.pvr_memo(memo_id_pk) NOT VALID;
 U   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_memo_id_fk_fkey;
       public          postgres    false    231    3029    222                       2606    63417 7   pvr_vr_detail pvr_vr_detail_pvr_final_status_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pvr_final_status_id_fk_fkey FOREIGN KEY (pvr_final_status_id_fk) REFERENCES public.pvr_final_status(pvr_final_status_id_pk) NOT VALID;
 a   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pvr_final_status_id_fk_fkey;
       public          postgres    false    206    2997    231                       2606    63422 1   pvr_vr_detail pvr_vr_detail_pvr_report_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pvr_report_id_fk_fkey FOREIGN KEY (pvr_report_id_fk) REFERENCES public.pvr_report(pvr_report_id_pk) NOT VALID;
 [   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pvr_report_id_fk_fkey;
       public          postgres    false    231    226    3037                       2606    63427 ,   pvr_vr_detail pvr_vr_detail_pvr_type_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pvr_type_fk_fkey FOREIGN KEY (pvr_type_fk) REFERENCES public.pvr_master_defence(df_type_id_pk) NOT VALID;
 V   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pvr_type_fk_fkey;
       public          postgres    false    231    3005    210                       2606    63432 /   pvr_vr_detail pvr_vr_detail_pvr_with_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_pvr_with_id_fk_fkey FOREIGN KEY (pvr_with_id_fk) REFERENCES public.pvr_with(pvr_with_id_pk) NOT VALID;
 Y   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_pvr_with_id_fk_fkey;
       public          postgres    false    232    231    3049                       2606    63437 .   pvr_vr_detail pvr_vr_detail_receipt_no_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_receipt_no_fk_fkey FOREIGN KEY (receipt_id_fk) REFERENCES public.pvr_receipt_no(receipt_id_pk) NOT VALID;
 X   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_receipt_no_fk_fkey;
       public          postgres    false    231    3033    224                       2606    63442 .   pvr_vr_detail pvr_vr_detail_sent_to_id_fk_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pvr_vr_detail
    ADD CONSTRAINT pvr_vr_detail_sent_to_id_fk_fkey FOREIGN KEY (sent_to_id_fk) REFERENCES public.pvr_master_sent_to(sent_to_id_pk);
 X   ALTER TABLE ONLY public.pvr_vr_detail DROP CONSTRAINT pvr_vr_detail_sent_to_id_fk_fkey;
       public          postgres    false    231    3025    220            �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �   �   x�3�����//J�P�-��L�,H�Qp�/*�/J,���㌈�R�OL�Q�(�04�2�� ��_��%+8����@�::9��� fLذ��J͸D��L ~��$D�Ф=... I!b�      �      x������ � �      �   -   x�3��KI-R(�ON-.�2�K-�L�LM�2J��81z\\\ J��      �      x������ � �      �   y   x���;�0E����|bYӱ���	+��[H�n{���4��9�����\
�u��8j�Bެ	�V� �(�P�B��6f�MH�$LH+��(���+Z����	~-��8�/$?����WO,      �   -   x�3�tO�K-J��2��wr�u�2�N\&���\���!\1z\\\ ���      �   C   x�3��K,��2�t�,J�/JN�2�t,ʭ�2����SpIMK�
�r$%*�f�d�$Ur��qqq �M      �   5   x�3�Rvu���2�9��8���$�0�2�tt��X F��� c��      �   S   x����0 �7L�&��B+��|L��w�޻5�Im�
+�����ĮkI���
+� �L:3n�S����ς�/�.p      �      x��\ݒ�6ν�<��R��jɲ$_�-Ţ����v׾�s|��	��*�	�L� ��d��˭m7]Mv6Ƿ����+77;ܭ��ŉ8+(>��y~�.mg��tMqa����и���>@YF����s���f�Cc� *)���<�؋m�\&T��[.��k+���]��b�����&���m�Q.oÄ�yٺC^�v��ɮ�G���b��/�7o'|���5a��<�v�,<Y�u�{����9ٱ�"�o=�B�]�;7jXԋ�n��g�G��؁7>�GY���KY����U�9�?�s���-q�{
�:�0��dn���b� ��Y�x�^_P�v�����,�]],<���v�8��	�^����m��Y�Y���%+���%�JO{5m���r,��w�����v�,��w��޴��!�f]`�W5��&׸�K� �
m�x�B�Վ~��TpK��+i��f1�W�	�8�w���px`�cq�6ZaEK��W��N0�Hzz3���p�����b0�n>�p	�H,<��[h�~gRo<�OvM-�{'FIqf�2Z�0����x��4�KN���83���-��X��U��t:l<P;..���n��q��iUBn��(ym���k�y��tG[g���?�rp}�83�e��+TX�|U�̀��p�by��������j;w�����p����"^u�T�Ui��g�d6�K���?�a�x+Vڬ�N�	��
�<�ˤ��3#S��s8؛�y�uN{��s��xE`	m�����ę��b�������X�<�X\���[(%F*����7�ĵi�~��)���W�������kSs>g2��}�-rD�q��GR��k�vzbgD(�ux^tA<�����g�T��|Wt���XJ[p��X|6����W({{3t,0�X�aN�O��H2�1�n��zu�V�S*�(FNfl�0%��jg%���S��5F�N�S�1xfԿ���A����l�ę�t)yn:�&��|W�����Ղf��T���=T���"ix������Ѯ[�}�a��WJ���}�v�i�����OJ������Ks���N����p.c����gCc��|a���HF���%U��T6w�b1Y栅 `�t��l��+!"�'=��5�n"gR��\��0/8�k�1�eNk:XA���Ky�pRbl��/
$?~�R�2�Bwm����K�%뵖���~��� �ł\�3+��� /�1�=�Q�d�Մ��t�t����������z�0F�*i	���-�� 5yl^���P�����k@ sฯ�OF��G�)����r�Hn�3yS,�u7$[f��K_�}��Co���~F�	ް�����p�`؃�R@\���IToB���2ݘ0�޴�� x�M��13I��i7�Zmh��V�kC��~?��lˬ��j�z��O�C�a�x�KA�@`ʈu
���e-��ɞ-�x�9��c���[=|48&��Jk#Ӛ�����k�t%�f;��������y���g��]��!����pw���&?��5{�
W��&�M������YN{,��'u��o�	�b���H��!qIf����_�����ml��k1��缹�=ܑ׶;/�A�v<IG���́9��^������/���-4镬f�AL�N;XƊ�Go!�p#YPY2R�x��7��]���K�]XLWN״�Lv�e���}�X���A��v��4���^��⋖f屐yV�n'�4Y ��K�!����`�;l�M^z� |`5R���\z
sp<��m@�����a�1��#yl�U�Tva0#g[��(����P�����@����X���~&�J���ꐌ�ZΒ�}��o��`����%�X�,f��`޶Mzn�~�����n���;!n��Y�������+)P'C��bˇ�C�x�b��^���O����%T��AG�R�G�N�_��N����{J^K`Y�qU�ɭ	�L���m�tg7�%{J�ǧD=e(5��/yvT
R����_�G��ba��w�V>/B�$Y(�ݮ�T�z�~���ƭ���7�E�w�Df�?� ��K��g����a~��a�N�b�y���l��w-.$(]q��:�sH��a��X��K��=]���~�6���� ��c�֡L��v�K��T����vlS0~ �H��ȫ�Vc����A0a�������Hmae��c$GX�'%�ě�D:5�s��K���|��k/�6k�h3<�#��|�m���ܻ����l��V���+���)�E�;xF���q�0�l����lr���r-�2�}��-�z#ɆǙ��c��^.�b����Ԉ��N��)��'�U��	P���}���Xg�a���g��@Z�H��N<B����xKu�-���/����+X�K��/�]��^N�4{���⊗���. �ra����#h���zL�mH!WG���p����<|�X8���f`���1��r�n~p
�k�,by�۴~N��0���,L�{�O���+�Klh��8�"y��z���!q]��0.hͼ�@��������O<C������3U��?>S�����u���Xz��|�Ǒ@^��1rlW;�4_G K��bo�Eb�fI~r�)�O��#����-*�����B�@��^�M��<!{�y)�1gqW� #9N͇]�}|����\JN";���rq���c��Xu�~�Ycp���$�o7�Cg=�%y���^0�%kH���&�+��.���ǧ�0��2���%[	V���b� ���~M�R�7��e�!���H-���,��@�Jy���#r$%Θ����;2A7Z����l�v�3 ��76�5��,݅�S�aRU�k���z�m�@,s�rS�%
m��@G�� 3W���iՁ�6�|�9*����I*�e�X��x��d���bb
� d�3L~���.�M[�毟�J&��4z-��f�6]&xhg�,i�U�Dt��RTB��C�*�������-�ΏJ�J��3�Q%FID��MLp21Rz��x����@�&��R����Dy�
��^�ŵ+�Gcf���>�5�B�b�`�JN�h',�&�2o{S�r���TJ��Ɓ�����Mc�,�K�S℟��,	��i/{�͊�7�s�B�
Uh�(2��{�U����rz�[ �
�f,���j���o�;HK�t����f�A�N#�P�0����E�O����*}O���S9��a�k�/;\x<5ZT�a-B��o��^��D-,�IU!9��%������]�-` ;/(�,�͇x���ϳΣ��_Z�b�vpi[i�T�$V:aR��D6���2T��-�Q�tV���m�(�W��c��M)����d��X�+x:�ig:����Ѝ��VJ���3�]l:ĉ����!�Ql��� ����!��S�3U��xC��&Zʷ�6lS2Z%�o�5r�r�L��d�[��%mí��x�[U�����j��|�g��~m)����c��q�"�!��@��>�E�ɴj#�~J�lư*q�%#_�<�M]m�;}�ѿ�E�:�Q��J^H���+��
JL�<���d��dQ �w^�k1�!�a�������oC�_?m�PD6�j1��nN^R�1g��z�̬M�[�Rߙ,��ΉU���CR�6n&��������s&��ͬ��]�����:KH�'ufI��мRU����O�%��߁'��P��3|���_�� 
:�Y5�[��0�kGc����J�QD��t��	�;�N�j�x�}���$�HS�7T$z�͊!�vJ;��������k��ds��p�5#ލM�J�n�Y���v��_A'�2��\����b��i5d�4h�l�V����;��k�����=�_����'�m�]�6υi]�lz����|Q���@v0$s��u;iq��5^�$ﯘ��[����%��m+�!F��M92+�l���Ԏ.zG��L6݁��k!d���`+  �  ?��O��n൐�{s���o�S �^FOI;��F�*`m�h)�=���,
b/$�Y�8c�M#v���| ����&�Q���)�9�!���t	W��X.a
�#���	�۰�����=5ǋ2*Fk���!TDb�ٽ��t��g)0y[���n�,�9�@�c�4�T�dr1RɆ&M�����\~�!)�FJi
L�|��Ba`?��^�yWe'mK`|A�Z~�;��~��T��>�V��|�%�ߛ��ٙC՛|ǔn/��Z�����_b�Ȼ�i&}�#�_�����)4�s��l(�Si��d���m0����`�0�� 8~�&��#/\x�h�}�}�?���_�[~Ҡ'j������3	�r!Ф�*����t�$��y���|Jd5�U�#q%��3�K��ڠ�B���T,#���q��^��� !F�3�@|pBAb1"��a !j��Y݌�I5��Ŭ�{��XR��@�CnҖ�(��o�"�%����`S[����Q�~)@#������9,~I�(���˙MF��r�jK��O�H�*��lRq�H���o��(�YL�\*YH��^�����������v�*y��ǚ>5pz6)2b$��ߗ��5Ƿ��/>SHnߐ5����c�g~ݰ�O��c��#����?��ItK��b�!������ɇ����W�@�q��{��p��tP
*1Sx�����H%7��F#Rq�vVE�|�$�Uo�Y�J�;J���̀�E�+ 8:I����;D��c��h���%,)�$���U!�y�B�FKV�t�N`S�T24\��0������r�+�̞�@�>���>�1L����g�.�3���;(+�C���z:r���0��X\I*5��*^5ZK}��zC!��.��N�#%W)�ł�������t�[R��M�@<�۵3��е��H!20�1|�u�p���'8�6L~�IH'-����@�_��h������5o&�d�px��$�R�Ԧ�#K0�ԷNL��rQr,�D[0��Za�K-���`B������ ��U�q]��O�efr�3�:䡉��2�`0���+�`��8r�1 ɚ�h��wK�}({ㆽ7�F�[ڦ����!|y#���g��ȯxZ��X̏O�����o���^!�v�c���G����_��3n��      �   $   x�3�.I,IUp�/+�2�tN�+)J́pc���� �N	|      �   #   x�3��M�I�2�tK�1�9�K2R���b���� |k�      �   [   x�3��K-Wp,(��LN,���SJMN�,KM�2�J�JM.IM�*��V������e��Z���	����MIMK�KNů����z�=... +�7�      �   *   x�3�t�	�tQ�ut1C\���<�]9M�b���� ���      �      x������ � �      �   	  x�5PKn�0\?N�	��_�eH�TQ[E���f �;2Њ��6ac͌g�ϏQ	�fby�P��d=L�K���A�yFRM�t�z.Ƃ���mǹ^���r�K3�؝#����3lõ���-jO�t�m�؆N�B?c�n���2sw )��B��2���O�Z�¼<��XHhA'�w��l��&+㎮>��#���~_?M6tWS�]"�$a.�j�?%�[ʌ~��t��Еdԙy�s�7�5,f�U,�V��+��x��E�?�_r      �   (   x�3�tP��r��2�Pp�tR
r������ w��      �   S  x�eQ�r� <�_�S�����9ʁ1�=�q'��8��ӛv�ؕ$`F�s��:��[�Gh$��fpi7B��)l[3�%A�	���)!�+l!�`�vX��^�-���x=�^e�	F��5�s�W )��D'\�ʢ��n��0��_+�1��J���z�i��0ƣR�`f��H����B)��)�����XT�_���<�URE(dg|jese��(Bf����K=�dk����t��l.(C���&t��;�����Uw���Hp�x�
:H���ªz�z���7���JE�i8��:�A˕c��)5���cq����5S�����4�7%���      �      x������ � �      �   -  x�uR�n�0<���c��P)�ǭ��c,l���wm����gwgf�d${����|a��V�t�	*�b)�ڨ��p�7+"�zd0kge:��l����r�[b2���������{�=�57t��X��(���n+#�R�^���i�aN�1�b�?s����Dt߷NN�M|�'��v�Qw�|i���d����rm�{�U�,	�yT��ē�3&6���pcX0�0>��<��y}{C�'�a*�]���d�kC��,���Jk=���5�@�zB� ����      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x�3�4A�=... ��      �   9   x�3�LLJvH�M���K����wV��@��q�gIjq	�!W� �o�      �      x�3�4�4�4�2�4�`H��qqq 3�j      �      x������ � �      �      x������ � �     