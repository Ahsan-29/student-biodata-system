**Create operations using laravel**

----

Returns json data about Create database data

* **URL**

  /api/add/id

* **Method:**

  `Post`
  
*  **URL Params**

   **Required:**
 
   `id=[integer]`

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ Data has been created successfully" }`
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />

  OR

  * **Code:** 401 UNAUTHORIZED <br />

* **Sample Call:**

  ```Laravel

Route::post("create",[DeviceController::class,'create']);

  ```


//////////////////////////////////



**Read operation using laravel**

----

Returns json data about get database data

* **URL**

  /api/list/id

* **Method:**

  `Get`
  
*  **URL Params**

   **Required:**
 
   `id=[integer]`

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ id : 12, email : "Michael Bloom", password : "Ahsan123" , name : "Ahsan", School : "Netroots"  }`
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:** `{ error : "User doesn't exist" }`

* **Sample Call:**

  ```Laravel

Route::get("list",[DeviceController::class,'list']);

  ```


//////////////////////////////////

**Update operations using laravel**
----
  Returns json data Update operation

* **URL**

  /api/update/id

* **Method:**

  `Put`
  
*  **URL Params**

   **Required:**
 
   `id=[integer]`

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ Data has been updated successfully" }`
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:** `{ error : "User doesn't exist" }`

* **Sample Call:**

  ```Laravel

Route::put("update/{id} ",[DeviceController::class,'update']);

  ```


//////////////////////////////////

**delete operations using laravel**

----

  Returns json data Delete operations

* **URL**

  /api/delete/id


* **Method:**

  `Delete`
  
*  **URL Params**

   **Required:**
 
   `id=[integer]`

* **Data Params**

  None

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ Data has been deleted suucessfully" }`
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:** `{ error : "User doesn't exist" }`

* **Sample Call:**

  ```Laravel
Route::delete("delete/{id}",[DeviceController::class,'delete']);
  ```



