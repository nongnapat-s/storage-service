(window.webpackJsonp=window.webpackJsonp||[]).push([[5],{205:function(t,e,a){"use strict";a.r(e);var s=a(0),n=Object(s.a)({},(function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("ContentSlotsDistributor",{attrs:{"slot-key":t.$parent.slotKey}},[a("h1",{attrs:{id:"คู่มือการใช้งานระบบ-storage-service"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#คู่มือการใช้งานระบบ-storage-service"}},[t._v("#")]),t._v(" คู่มือการใช้งานระบบ Storage Service")]),t._v(" "),a("p",[t._v("ระบบ Storage Service เป็นระบบช่วยจัดเก็บไฟล์ต่างๆ ของ client applications โดยมี function ต่างๆ ดังต่อไปนี้")]),t._v(" "),a("ul",[a("li",[a("a",{attrs:{href:"#upload"}},[t._v("upload")])]),t._v(" "),a("li",[a("a",{attrs:{href:"#download"}},[t._v("download")])]),t._v(" "),a("li",[a("a",{attrs:{href:"#store"}},[t._v("store")])]),t._v(" "),a("li",[a("a",{attrs:{href:"#put-file"}},[t._v("put-file")])]),t._v(" "),a("li",[a("a",{attrs:{href:"#delete-file"}},[t._v("delete-file")])]),t._v(" "),a("li",[a("a",{attrs:{href:"#delete-folder"}},[t._v("delete-folder")])])]),t._v(" "),a("h2",{attrs:{id:"upload"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#upload"}},[t._v("#")]),t._v(" upload")]),t._v(" "),a("p",[t._v("upload เป็น function สำหรับ upload file ต่างๆ จาก client applications ไปเก็บไว้ที่ Storage Service")]),t._v(" "),a("ol",[a("li",[t._v("Http Request")])]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",{staticStyle:{"text-align":"center"}},[t._v("route")]),t._v(" "),a("th",{staticStyle:{"text-align":"center"}},[t._v("method")])])]),t._v(" "),a("tbody",[a("tr",[a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("upload")])]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("POST")])])])])]),t._v(" "),a("ol",{attrs:{start:"2"}},[a("li",[t._v("ข้อมูลที่ต้องส่งไปยัง Storage Service เพื่อทำการ upload file")])]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",[t._v("Data")]),t._v(" "),a("th",{staticStyle:{"text-align":"center"}},[t._v("Required")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("Description")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("Remark")])])]),t._v(" "),a("tbody",[a("tr",[a("td",[t._v("file")]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("true")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("ไฟล์ที่ต้องการ upload")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("upload ไฟล์ได้ไม่เกินครั้ง 10 mb")])]),t._v(" "),a("tr",[a("td",[t._v("state")]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("true")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("storage folder ของ Storage Service ที่ต้องการเก็บไฟล์ โดยส่งคำว่า "),a("code",[t._v("public")]),t._v(" หรือ "),a("code",[t._v("local")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("หากต้องการเก็บไฟล์ที่สามารถดูผ่าน browser ได้ให้เก็บไฟล์ไว้ที่ "),a("code",[t._v("public")])])]),t._v(" "),a("tr",[a("td",[t._v("sub_folder")]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("false")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("เพิ่ม sub folder ภายใต้ folder ที่สร้างขึ้นใน Storage Service")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}})])])]),t._v(" "),a("h2",{attrs:{id:"download"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#download"}},[t._v("#")]),t._v(" download")]),t._v(" "),a("p",[t._v("download เป็น function สำหรับ download file จาก Storage Service เข้าสู่ device ของ client")]),t._v(" "),a("ol",[a("li",[t._v("Http Request")])]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",{staticStyle:{"text-align":"center"}},[t._v("route")]),t._v(" "),a("th",{staticStyle:{"text-align":"center"}},[t._v("method")])])]),t._v(" "),a("tbody",[a("tr",[a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("files/{slug}")])]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("GET")])])])])]),t._v(" "),a("ol",{attrs:{start:"2"}},[a("li",[t._v("ข้อมูลที่ต้องใช้สำหรับการ download file")])]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",[t._v("Data")]),t._v(" "),a("th",{staticStyle:{"text-align":"center"}},[t._v("Required")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("Description")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("Remark")])])]),t._v(" "),a("tbody",[a("tr",[a("td",[t._v("slug")]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("true")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("value ที่ใช้แทน id ของไฟล์")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("จะได้รับ slug หลังจากทำการ upload ไฟล์แล้ว")])])])]),t._v(" "),a("h2",{attrs:{id:"store"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#store"}},[t._v("#")]),t._v(" store")]),t._v(" "),a("p",[t._v("store เป็น function สำหรับ store file จาก Storage Service เข้าสู่ folder storage ของ client")]),t._v(" "),a("ol",[a("li",[t._v("Http Request")])]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",{staticStyle:{"text-align":"center"}},[t._v("route")]),t._v(" "),a("th",{staticStyle:{"text-align":"center"}},[t._v("method")])])]),t._v(" "),a("tbody",[a("tr",[a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("files/{slug}")])]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("GET")])])])])]),t._v(" "),a("ol",{attrs:{start:"2"}},[a("li",[t._v("ข้อมูลที่ต้องใช้สำหรับการ store file")])]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",[t._v("Data")]),t._v(" "),a("th",{staticStyle:{"text-align":"center"}},[t._v("Required")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("Description")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("Remark")])])]),t._v(" "),a("tbody",[a("tr",[a("td",[t._v("slug")]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("true")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("value ที่ใช้แทน id ของไฟล์")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("จะได้รับ slug หลังจากทำการ upload ไฟล์แล้ว")])])])]),t._v(" "),a("h2",{attrs:{id:"put-file"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#put-file"}},[t._v("#")]),t._v(" put-file")]),t._v(" "),a("p",[t._v("put-file เป็น function สำหรับ update file ที่อยู่แล้วใน Storage Service")]),t._v(" "),a("ol",[a("li",[t._v("Http Request")])]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",{staticStyle:{"text-align":"center"}},[t._v("route")]),t._v(" "),a("th",{staticStyle:{"text-align":"center"}},[t._v("method")])])]),t._v(" "),a("tbody",[a("tr",[a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("put-file")])]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("POST")])])])])]),t._v(" "),a("ol",{attrs:{start:"2"}},[a("li",[t._v("ข้อมูลที่ต้องส่งไปยัง Storage Service เพื่อทำการ update file")])]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",[t._v("Data")]),t._v(" "),a("th",{staticStyle:{"text-align":"center"}},[t._v("Required")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("Description")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("Remark")])])]),t._v(" "),a("tbody",[a("tr",[a("td",[t._v("_method")]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("true")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("method ของการ update file โดยมีค่าเท่ากับ "),a("code",[t._v("put")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}})]),t._v(" "),a("tr",[a("td",[t._v("slug")]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("true")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("value ที่ใช้แทน id ของไฟล์")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("จะได้รับ slug หลังจากทำการ upload ไฟล์แล้ว")])]),t._v(" "),a("tr",[a("td",[t._v("file")]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("true")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("file ใหม่ที่ต้องการส่ง")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}})])])]),t._v(" "),a("h2",{attrs:{id:"delete-file"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#delete-file"}},[t._v("#")]),t._v(" delete-file")]),t._v(" "),a("p",[t._v("delete-file เป็น function สำหรับลบ file ใน Storage Service")]),t._v(" "),a("ol",[a("li",[t._v("Http Request")])]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",{staticStyle:{"text-align":"center"}},[t._v("route")]),t._v(" "),a("th",{staticStyle:{"text-align":"center"}},[t._v("method")])])]),t._v(" "),a("tbody",[a("tr",[a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("delete-file")])]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("POST")])])])])]),t._v(" "),a("ol",{attrs:{start:"2"}},[a("li",[t._v("ข้อมูลที่ต้องส่งไปยัง Storage Service เพื่อทำการลบ file")])]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",[t._v("Data")]),t._v(" "),a("th",{staticStyle:{"text-align":"center"}},[t._v("Required")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("Description")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("Remark")])])]),t._v(" "),a("tbody",[a("tr",[a("td",[t._v("_method")]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("true")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("method ของการลบ file โดยมีค่าเท่ากับ "),a("code",[t._v("delete")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}})]),t._v(" "),a("tr",[a("td",[t._v("slug")]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("true")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("value ที่ใช้แทน id ของไฟล์")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}})])])]),t._v(" "),a("h2",{attrs:{id:"delete-folder"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#delete-folder"}},[t._v("#")]),t._v(" delete-folder")]),t._v(" "),a("p",[t._v("delete-folder เป็น function สำหรับลบ folder ใน Storage Service")]),t._v(" "),a("ol",[a("li",[t._v("Http Request")])]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",{staticStyle:{"text-align":"center"}},[t._v("route")]),t._v(" "),a("th",{staticStyle:{"text-align":"center"}},[t._v("method")])])]),t._v(" "),a("tbody",[a("tr",[a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("delete-folder")])]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("POST")])])])])]),t._v(" "),a("ol",{attrs:{start:"2"}},[a("li",[t._v("ข้อมูลที่ต้องส่งไปยัง Storage Service เพื่อทำการลบ folder")])]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",[t._v("Data")]),t._v(" "),a("th",{staticStyle:{"text-align":"center"}},[t._v("Required")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("Description")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("Remark")])])]),t._v(" "),a("tbody",[a("tr",[a("td",[t._v("_method")]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("true")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("method ของการลบ folder โดยมีค่าเท่ากับ "),a("code",[t._v("delete")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("method's value is "),a("code",[t._v("delete")])])]),t._v(" "),a("tr",[a("td",[t._v("state")]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("true")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("storage folder ของ Storage Service ที่ต้องการลบ folderโดยส่งคำว่า "),a("code",[t._v("public")]),t._v(" หรือ "),a("code",[t._v("local")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}})]),t._v(" "),a("tr",[a("td",[t._v("folder")]),t._v(" "),a("td",{staticStyle:{"text-align":"center"}},[a("code",[t._v("false")])]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("ชื่อของ folder ที่ต้องการลบ")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}})])])]),t._v(" "),a("h2",{attrs:{id:"example-of-uploading-file-by-php-with-guzzlehttp"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#example-of-uploading-file-by-php-with-guzzlehttp"}},[t._v("#")]),t._v(" Example of uploading file by PHP with GuzzleHttp")]),t._v(" "),a("p",[t._v("ตัวอย่างการ upload file ไปยัง Storage Service โดยใช้ PHP และ GuzzleHttp")]),t._v(" "),a("div",{staticClass:"language-php line-numbers-mode"},[a("pre",{pre:!0,attrs:{class:"language-php"}},[a("code",[t._v("Route"),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(":")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(":")]),a("span",{pre:!0,attrs:{class:"token function"}},[t._v("post")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'/upload'")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("function")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n    "),a("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$client")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("new")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token class-name"}},[t._v("GuzzleHttp"),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("\\")]),t._v("Client")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),t._v("\n        "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'base_uri'")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'https://little-fortune.me/storage-service/'")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n        "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'timeout'")]),t._v("  "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token number"}},[t._v("8.0")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n    "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n    "),a("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$response")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$client")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("-")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),a("span",{pre:!0,attrs:{class:"token function"}},[t._v("post")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'upload'")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),t._v("\n        "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'headers'")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),t._v("\n            "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'Accept'")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'application/json'")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n            "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'token'")]),t._v("  "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),t._v(" app_token"),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" \n            "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'secret'")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),t._v(" app_secret\n        "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n        "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'multipart'")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),t._v("\n            "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),t._v("\n                "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'name'")]),t._v("     "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'state'")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n                "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'contents'")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'public'")]),t._v("\n            "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n            "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),t._v("\n                "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'name'")]),t._v("     "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'file'")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n                "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'contents'")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token function"}},[t._v("fopen")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),a("span",{pre:!0,attrs:{class:"token function"}},[t._v("request")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("-")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),a("span",{pre:!0,attrs:{class:"token function"}},[t._v("file")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'file'")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'r+'")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n            "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n            "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),t._v("\n                "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'name'")]),t._v("     "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'sub_path'")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n                "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'contents'")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token single-quoted-string string"}},[t._v("'pdf'")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n            "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),t._v("\n        "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),t._v("\n    "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("  \n    "),a("span",{pre:!0,attrs:{class:"token keyword"}},[t._v("if")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$response")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("-")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v(">")]),a("span",{pre:!0,attrs:{class:"token function"}},[t._v("getStatusCode")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("==")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token number"}},[t._v("200")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("{")]),t._v("\n        "),a("span",{pre:!0,attrs:{class:"token comment"}},[t._v("// in case of successed")]),t._v("\n    "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),t._v("\n"),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("}")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])]),t._v(" "),a("div",{staticClass:"line-numbers-wrapper"},[a("span",{staticClass:"line-number"},[t._v("1")]),a("br"),a("span",{staticClass:"line-number"},[t._v("2")]),a("br"),a("span",{staticClass:"line-number"},[t._v("3")]),a("br"),a("span",{staticClass:"line-number"},[t._v("4")]),a("br"),a("span",{staticClass:"line-number"},[t._v("5")]),a("br"),a("span",{staticClass:"line-number"},[t._v("6")]),a("br"),a("span",{staticClass:"line-number"},[t._v("7")]),a("br"),a("span",{staticClass:"line-number"},[t._v("8")]),a("br"),a("span",{staticClass:"line-number"},[t._v("9")]),a("br"),a("span",{staticClass:"line-number"},[t._v("10")]),a("br"),a("span",{staticClass:"line-number"},[t._v("11")]),a("br"),a("span",{staticClass:"line-number"},[t._v("12")]),a("br"),a("span",{staticClass:"line-number"},[t._v("13")]),a("br"),a("span",{staticClass:"line-number"},[t._v("14")]),a("br"),a("span",{staticClass:"line-number"},[t._v("15")]),a("br"),a("span",{staticClass:"line-number"},[t._v("16")]),a("br"),a("span",{staticClass:"line-number"},[t._v("17")]),a("br"),a("span",{staticClass:"line-number"},[t._v("18")]),a("br"),a("span",{staticClass:"line-number"},[t._v("19")]),a("br"),a("span",{staticClass:"line-number"},[t._v("20")]),a("br"),a("span",{staticClass:"line-number"},[t._v("21")]),a("br"),a("span",{staticClass:"line-number"},[t._v("22")]),a("br"),a("span",{staticClass:"line-number"},[t._v("23")]),a("br"),a("span",{staticClass:"line-number"},[t._v("24")]),a("br"),a("span",{staticClass:"line-number"},[t._v("25")]),a("br"),a("span",{staticClass:"line-number"},[t._v("26")]),a("br"),a("span",{staticClass:"line-number"},[t._v("27")]),a("br"),a("span",{staticClass:"line-number"},[t._v("28")]),a("br"),a("span",{staticClass:"line-number"},[t._v("29")]),a("br"),a("span",{staticClass:"line-number"},[t._v("30")]),a("br")])]),a("h2",{attrs:{id:"responses"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#responses"}},[t._v("#")]),t._v(" Responses")]),t._v(" "),a("h3",{attrs:{id:"http-responses"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#http-responses"}},[t._v("#")]),t._v(" Http Responses")]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",{staticStyle:{"text-align":"center"}},[t._v("Status code")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("Status text")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("Description")])])]),t._v(" "),a("tbody",[a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("200")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("OK")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("สามารถส่ง Request ไปยัง Storage Service ได้สำเร็จ")])]),t._v(" "),a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("400")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("incomplete request")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("ส่งข้อมูลไปยัง Storage Service ไม่ครบถ้วน")])]),t._v(" "),a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("401")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("not allowed")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("Client ไม่ได้รับอนุญาติให้ดำเนินการต่างๆ กับ Storage Service")])]),t._v(" "),a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("500")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("internal server error")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("เกิด error ที่ฝั่ง Storage Service")])])])]),t._v(" "),a("h3",{attrs:{id:"data"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#data"}},[t._v("#")]),t._v(" Data")]),t._v(" "),a("p",[t._v("ข้อมูลที่ client จะได้รับจาก Storage Service ในการดำเนินการ upload และ upload file")]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",{staticStyle:{"text-align":"center"}},[t._v("data")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("Description")])])]),t._v(" "),a("tbody",[a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("path")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("directory ที่จัดเก็บ file")])]),t._v(" "),a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("state")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("storage folder ของ Storage Service ที่จัดเก็บ file")])]),t._v(" "),a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("name")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("ชื่อของ file")])]),t._v(" "),a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("type")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("ประเภทของ file")])]),t._v(" "),a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("size")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("ขนาดของ file")])]),t._v(" "),a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("url")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("กรณีที่ เก็บไฟล์ไว้ใน "),a("code",[t._v("public")]),t._v(" ระบบจะ return URL ที่ใช้สำหรับเข้าถึง file ผ่าน browser")])]),t._v(" "),a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("slug")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("value ที่ใช้แทน id ของไฟล์")])]),t._v(" "),a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("created_at")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("วันและเวลาที่ upload file")])]),t._v(" "),a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("updated_at")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("วันและเวลาที่มีการ update file")])])])]),t._v(" "),a("h3",{attrs:{id:"reply-statuses"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#reply-statuses"}},[t._v("#")]),t._v(" Reply statuses")]),t._v(" "),a("p",[t._v("ข้อมูลที่ client จะได้รับจาก Storage Service ในการดำเนินการต่างๆ")]),t._v(" "),a("table",[a("thead",[a("tr",[a("th",{staticStyle:{"text-align":"center"}},[t._v("reply_code")]),t._v(" "),a("th",{staticStyle:{"text-align":"left"}},[t._v("reply_text")]),t._v(" "),a("th",[t._v("Description")])])]),t._v(" "),a("tbody",[a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("0")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("OK")]),t._v(" "),a("td",[t._v("ดำเนินการสำเร็จ")])]),t._v(" "),a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("1")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("no file")]),t._v(" "),a("td",[t._v("ไม่มี file ที่ต้องการ upload")])]),t._v(" "),a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("2")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("no current file in storage")]),t._v(" "),a("td",[t._v("ไม่มี file ปัจจุบันใน storage")])]),t._v(" "),a("tr",[a("td",{staticStyle:{"text-align":"center"}},[t._v("3")]),t._v(" "),a("td",{staticStyle:{"text-align":"left"}},[t._v("Don't have permission to delete file")]),t._v(" "),a("td",[t._v("ไม่มีสิทธิ์ในการลบไฟล์")])])])])])}),[],!1,null,null,null);e.default=n.exports}}]);