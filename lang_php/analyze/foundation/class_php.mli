
exception Use__Call
exception UndefinedClassWhileLookup of string

(* can raise UndefinedClassWhileLookup, Not_found, Multi_found, or Use__Call *)
val lookup_method: 
  ?case_insensitive: bool ->
  Entity_php.method_identifier ->
  Entity_php.entity_finder ->
  Ast_php.method_def

(* can raise UndefinedClassWhileLookup, Not_found, Multi_found *)
val lookup_member: 
  ?case_insensitive: bool ->
  (string (* class *) * string (* field *)) ->
  Entity_php.entity_finder ->
  Ast_php.class_variable * Ast_php.class_var_modifier

(* can raise UndefinedClassWhileLookup, Not_found, Multi_found *)
val lookup_constant:
  (string (* class *) * string (* constant *)) ->
  Entity_php.entity_finder ->
  Ast_php.class_constant

(* does not raise exception *)
val collect_members: 
  string (* class *) -> Entity_php.entity_finder -> Ast_php.dname list

val get_public_or_protected_vars_of_class:
  Ast_php.class_def -> Ast_php.dname list

val class_variables_reorder_first:
  Ast_php.class_def -> Ast_php.class_def

val is_static_method:
  Ast_php.method_def -> bool

(* __construct *)
val constructor_name: string 
val get_constructor: Ast_php.class_def -> Ast_php.method_def

