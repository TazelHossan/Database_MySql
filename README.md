# A SIMPLE DATABASE PROJECT NAME : PHARMACY MANAGEMENT SYSTEM

Database name : pms
There are 8 tables :
    1.admin
    2.disposal
    3.drugs
    4.manager
    5.medicine
    6.purchase
    7.registration
    8.staff
    9.stock

Table structure:
                ------------------
                1.for table admin:
                ------------------
                ID	int(11)	No		
                username	varchar(50)	No		
                password	varchar(50)	No	
                ------------------
                2.for table disposal:
                ------------------
                Disposal_Id	int(20)	No		
                Disposal_Name	varchar(30)	No		
                Disposal_Price	int(30)	No		
                Disposal_Category	varchar(30)	No		
                Disposal_Quantity	int(20)	No		
                Disposal_Payment	int(20)	No		
		            --------------------------
                3. for table drugs:
                ---------------------------
                mid	int(30)	No		
                mname	varchar(30)	No		
                mtype	varchar(30)	No		
                mcost	int(30)	No		
                mav	varchar(30)	No		
                mdate	date	No		
                mimg	text	No		
              -----------------------
              4.for table manager:
              -----------------------
              MA_ID	int(20)	No		
              MA_NAME	varchar(20)	No		
              MA_GENDER	varchar(20)	No		
              MA_STATUS	varchar(20)	No		
              MA_SALARY	int(30)	No		
              MA_CITY	varchar(30)	No		
              MA_PHONE	varchar(30)	No		
            --------------------------		
              4.for table medicine:
             -------------------------
              mid	int(11)	No		
              mname	varchar(50)	No		
              mtype	varchar(50)	No		
              mcost	float	No		
              mav	varchar(30)	No		
              mimg	text	No		
              --------------------------
                5. for table purchase:
              -------------------------
              Purchase_Id	int(30)	No		
              Customer_Name	varchar(30)	No		
              Purchase_Quantity	int(30)	No		
              Purchase_Date	date	No		
              Purchase_Amount	int(30)	No		
              ---------------------------
              6. for table registration:
              ---------------------------
              name	varchar(255)	No		
              password	varchar(255)	No		
              -------------------------              
               7. for table staff:
              ------------------------
              SID	int(20)	No		
              SNAME	varchar(30)	No		
              SSTATUS	varchar(30)	No		
              SGENDER	varchar(30)	No		
              SPHONE	varchar(30)	No		
              -------------------------
               8. for table stock:
               -------------------------
              ID	int(20)	No		
              NAME	varchar(30)	No		
              TYPE	varchar(30)	No		
              COST(TK)	int(20)	No		
              DATE	date	No		
              PAYMENT	int(20)	No				
