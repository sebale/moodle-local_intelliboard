<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This plugin provides access to Moodle data in form of analytics and reports in real time.
 *
 *
 * @package    local_intelliboard
 * @copyright  2017 IntelliBoard, Inc
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @website    http://intelliboard.net/
 */

$string['a0'] = 'Tableau de bord des compétences';
$string['a1'] = 'Compétences';
$string['a10'] = 'Apprenants inscrits';
$string['a11'] = 'Liste des compétences assignées au cours';
$string['a12'] = 'Statut apprenant';
$string['a13'] = 'Nom de la compétence';
$string['a14'] = 'Créé sur';
$string['a15'] = 'Attribué à';
$string['a16'] = 'Technicien Indiqué';
$string['a17'] = 'Classement';
$string['a18'] = 'Compétences acquises';
$string['a19'] = 'Classement de la compétence par Date';
$string['a2'] = 'Compétence';
$string['a20'] = 'Évaluateur de compétence';
$string['a21'] = 'Activités assignées';
$string['a22'] = 'Compétence atteinte/acquise';
$string['a23'] = 'Compétences évaluées';
$string['a25'] = 'Apprenants complétés';
$string['a24'] = 'Evidences';
$string['a26'] = 'Ce tableau affiche le nombre de compétences attribuées à un cours, les apprenants qui ont été évalués (ils soient compétents ou non) et les apprenants qui ont été désignés compétents dans la compétence.';
$string['a27'] = 'hors de';
$string['a28'] = 'Détails';
$string['a29'] = 'Activer le tableau de bord des compétences';
$string['a3'] = 'Activités assignées';
$string['a30'] = 'Activer les rapports de compétences';
$string['a31'] = 'Structures';
$string['a32'] = 'Plans apprentissage';
$string['a33'] = 'Évalué,Compétent';
$string['a34'] = 'Évalué, Non Compétent';
$string['a35'] = 'Non Évalué';
$string['a36'] = 'Aperçu des compétences';
$string['a37'] = 'Une compétence a pas été créée. Veuillez contacter votre administrateur système';
$string['a38'] = 'Cours liés aux compétences';
$string['a39'] = 'Totaux de compétence';
$string['a4'] = 'Progrès de la compétence';
$string['a40'] = 'Cours liés';
$string['a5'] = 'Compétences évaluées';
$string['a6'] = 'Evidences';
$string['a7'] = 'Apprenants évalués';
$string['a8'] = 'progrès';
$string['a9'] = 'Apprentis compétents';
$string['account'] = 'Information abonnement';
$string['actions'] = 'actes';
$string['activities'] = 'Activités';
$string['activities_resources'] = 'Activités / Ressources';
$string['activity_grades'] = 'Notes activité';
$string['activity_name'] = 'Nom activité';
$string['activity_participation'] = 'Participation a une activité';
$string['activity_progress'] = 'Progression activité';
$string['adv_settings'] = 'Paramètres avancé';
$string['ajax'] = 'La fréquence';
$string['ajax_desc'] = 'Session stockant la fréquence via AJAX. 0 - AJAX désactivé (en secondes)';
$string['all_courses'] = 'Tous les cours';
$string['all_data'] = 'Toutes les données';
$string['assignment_name'] = 'Nom du devoir';
$string['assignments'] = 'Devoirs';
$string['average_grade'] = 'la note moyenne';
$string['categories'] = 'Catégories';
$string['category'] = 'Catégorie';
$string['class_average'] = 'Moyenne de la classe';
$string['click_link_below_support_pages'] = 'Cliquez sur le lien ci-dessous pour accéder aux pages de support IntelliBoard:';
$string['close'] = 'Fermer';
$string['cohorts'] = 'Groupes';
$string['completed'] = 'Terminé';
$string['completed_activities'] = 'Activités terminées';
$string['completed_activities_resources'] = 'Activités terminées / ressources';
$string['completed_activities_resourses'] = 'Activités terminées / ressources';
$string['completed_courses'] = 'Cours complétés';
$string['completed_on'] = 'Terminé le {$a}';
$string['completion'] = 'Achèvement';
$string['completion_is_not_enabled'] = 'Achèvement est pas activé pour ce cours';
$string['completions'] = 'Statut achèvement activité';
$string['completions_completed'] = 'État achèvement (terminé)';
$string['completions_desc'] = '1) utilisateur a terminé cette activité. Il est pas spécifié ils ont réussi ou échoué. <br> <br>
2) utilisateur a terminé cette activité avec une note supérieure à la note de passage. <br> <br>
3) utilisateur a terminé cette activité mais sa note est inférieure à la note de passage.';
$string['completions_fail'] = 'Statut achèvement (échoué)';
$string['completions_pass'] = 'Statut achèvement (réussite)';
$string['completion_status'] = 'état achèvement';
$string['correlations'] = 'Corrélations';
$string['course_category'] = 'Catégorie de cours';
$string['course_completions'] = 'Cours complétés';
$string['course_completion_status'] = 'État achèvement du cours';
$string['course_grade'] = 'niveau de cours';
$string['course_name'] = 'Nom du cours';
$string['course_overview'] = 'Aperçu du cours';
$string['course_progress'] = 'Progression du cours';
$string['courses'] = 'Cours';
$string['courses_avg_grade'] = 'Cours niveau moyen';
$string['courses_sum_grade'] = 'Valeur de la somme de cours par échelle';
$string['courses_in_progress'] = 'Cours en progression';
$string['course_start_date'] = 'Date de début du cours';
$string['course_started'] = 'Cours commencé';
$string['course_success'] = 'Réussite du cours';
$string['current_grade'] = 'Niveau actuel';
$string['daily'] = 'quotidien';
$string['dashboard'] = 'Tableau de bord';
$string['disabled'] = 'désactivé';
$string['disable_time_and_visits_users_overview'] = 'Désactiver le temps passé et les visites dans la vue ensemble des utilisateurs';
$string['done'] = 'Fait!';
$string['due_date'] = 'Date échéance';
$string['enabled'] = 'Suivi activé';
$string['enabled_desc'] = 'Activer le suivi';
$string['enable_time_and_visits_users_overview'] = 'Activer le temps passé et les visites dans la vue ensemble des utilisateurs';
$string['enrolled'] = 'Inscrit';
$string['enrolled_completed'] = 'Inscrit: {$a-> cours}, Terminé: {$a-> cours_suivis}';
$string['enrolled_completed_learners'] = 'Apprenants inscrits / complétés';
$string['enrolled_date'] = 'Date inscription';
$string['enrolled_users_completed'] = 'Utilisateurs inscrits: {$a-> users}, Terminé: {$a-> Terminé}';
$string['enrollments'] = 'Inscriptions';
$string['enrolment_method'] = 'Méthode inscription';
$string['failed'] = 'Échoué';
$string['failed_on'] = 'Terminé (échoué) sur {$a}';
$string['filter1'] = 'Utilisateurs supprimés';
$string['filter1_desc'] = 'Afficher les utilisateurs supprimés';
$string['filter2'] = 'Utilisateurs suspendus';
$string['filter2_desc'] = 'Afficher les utilisateurs suspendus';
$string['filter3'] = 'Utilisateur invité';
$string['filter3_desc'] = 'Afficher utilisateur [invité] dans les rapports';
$string['filter4'] = 'Filtre de cours';
$string['filter4_desc'] = 'Afficher les cours non visibles';
$string['filter5'] = 'Filtre de méthode inscription';
$string['filter5_desc'] = 'Afficher les méthodes inscription non actives';
$string['filter6'] = 'Filtre inscription utilisateur';
$string['filter6_desc'] = 'Afficher les utilisateurs dont inscription est pas active';
$string['filter7'] = 'Activités / Ressources filter';
$string['filter7_desc'] = 'Afficher les activités / ressources non visibles';
$string['filter8'] = 'Filtre des utilisateurs inscrits';
$string['filter8_desc'] = 'Afficher uniquement les utilisateurs inscrits (non recommandé)';
$string['filter_dates'] = 'Filtrer les dates:';
$string['filters'] = 'Filtres de tableau de bord';
$string['grade'] = 'niveau';
$string['graded'] = 'Noté';
$string['grades'] = 'Niveaux';
$string['help'] = 'Besoin aide?';
$string['import'] = 'Importer';
$string['importing_logs'] = 'Importer les journaux';
$string['importing_totals'] = 'Importer des totaux';
$string['in1'] = 'Vu/Aperçu';
$string['in10'] = 'Utilisation événement';
$string['in11'] = 'Progression apprenant';
$string['in12'] = 'Progression du niveau';
$string['in13'] = 'Temps passé (%)';
$string['in14'] = '% progression';
$string['in15'] = 'Achèvement apprenants';
$string['in16'] = 'Dernier accès';
$string['in17'] = 'Temps total passé';
$string['in18'] = 'Total des visites';
$string['in19'] = 'Note moyenne';
$string['in2'] = 'Progrèssion actuelle';
$string['in20'] = 'Retourner aux apprenants';
$string['in201'] = 'Retour aux activités';
$string['in21'] = 'Niveau moyen du cours';
$string['in22'] = 'Activé(e)';
$string['in23'] = 'Vous avez aucun apprenant à afficher.';
$string['in24'] = 'Module';
$string['in25'] = 'Note de passage';
$string['in26'] = 'Engagement des apprenants';
$string['in27'] = 'Nombre total étudiants';
$string['in28'] = 'Temps moyen passé';
$string['in29'] = 'Étudiants actifs';
$string['in3'] = 'Total des cours';
$string['in30'] = 'Étudiants non actifs';
$string['in31'] = 'Utilisation activité';
$string['in32'] = 'Temps moyen dans la période sélectionnée';
$string['in33'] = 'Utilisation du sujet';
$string['in4'] = 'Total des apprenants';
$string['in5'] = 'Nombre total de cours et leurs niveaux';
$string['in6'] = 'Apprenants complétés';
$string['in7'] = 'Apprenants incomplets';
$string['in8'] = 'niveau moyen apprenant';
$string['in9'] = 'Corrélations';
$string['inactivity'] = 'Inactivité';
$string['inactivity_desc'] = 'Temps inactivité utilisateur (en secondes)';
$string['incomplete'] = 'Incomplet';
$string['intelliboardaccess'] = 'Vous êtes pas autorisé à voir cette page. Veuillez contacter votre administrateur pour obtenir une aide.';
$string['intelliboard:competency'] = 'IntelliBoard [compétence]';
$string['intelliboard:instructors'] = 'IntelliBoard [instructeur]';
$string['intelliboard_logs'] = 'Journaux IntelliBoard';
$string['intelliboard:manage'] = 'IntelliBoard [gérer]';
$string['intelliBoard_migration_tool'] = 'Outil de migration IntelliBoard';
$string['intelliBoard_migration_tool_info'] = 'outil de migration IntelliBoard est utilisé pour migrer les données historiques de la table des journaux Moodle vers un nouveau format. Veuillez noter que la procédure de stockage des journaux Moodle ne changera pas. Une fois les données historiques migrées vers un nouveau format, des valeurs historiques telles que «Temps passé» et «Visites» seront disponibles pour un aperçu sur IntelliBoard.net.';
$string['intelliboardnet'] = 'IntelliBoard.net';
$string['intelliboardroot'] = 'IntelliBoard';
$string['intelliboard_start_tracking'] = 'commencer le suivi IntelliBoard';
$string['intelliboard:students'] = 'IntelliBoard [étudiant]';
$string['intelliboard_totals'] = 'Totaux IntelliBoard';
$string['intelliboard_tracking'] = 'Suivi IntelliBoard';
$string['intelliboard:view'] = 'IntelliBoard [vue]';
$string['items_per_query'] = 'Éléments par requête';
$string['last_access_on_course'] = 'Dernier accès sur le parcours: {$ a}';
$string['last_month'] = 'Le mois dernier';
$string['last_quarter'] = 'dernier quart';
$string['last_semester'] = 'Dernier semestre';
$string['last_week'] = 'La semaine dernière';
$string['learner_name'] = 'Nom apprenant';
$string['learners'] = 'Apprenants';
$string['learners_enrolled'] = 'Apprenants inscrits';
$string['learners_enrolled_period'] = 'Apprenants inscrits pendant la période sélectionnée';
$string['learning'] = 'Apprentissage';
$string['learning_progress'] = 'Progrès apprentissage';
$string['letter'] = 'Lettre';
$string['load'] = 'Performance';
$string['loading'] = 'Chargement...';
$string['logs'] = 'Outil de migration';
$string['logs_to_process'] = 'Journaux à traiter {$a}';
$string['log_values_include'] = 'Les valeurs de journal incluent des journaux pour chaque utilisateur par jour.';
$string['messages'] = 'Messages';
$string['modules'] = 'Modules';
$string['monitors'] = 'indicateurs';
$string['monthly'] = 'Mensuel';
$string['moodle'] = 'Moodle';
$string['moodle_logs'] = 'Journaux Moodle';
$string['more_courses'] = 'Plus de cours';
$string['more_users'] = 'Plus de utilisateurs';
$string['my_course_average_all'] = 'ma moyenne de cours (tous les cours)';
$string['n1'] = 'Aperçu/vue [Progression apprenant]';
$string['n10'] = 'Tableau de bord de instructeur';
$string['n11'] = 'Texte alternatif pour le menu de navigation';
$string['n12'] = 'Aperçu/vue [Aperçu du cours]';
$string['n13'] = 'Nombre total étudiants';
$string['n14'] = 'Widget: Engagement des apprenants';
$string['n15'] = 'Widget: Utilisation des activités';
$string['n16'] = 'Widget: Utilisation du sujet';
$string['n2'] = 'Aperçu [Niveau de Progression ]';
$string['n3'] = 'Aperçu [Progression, activité]';
$string['n4'] = 'Aperçu [Totaux]';
$string['n5'] = 'Progression Actuelle';
$string['n6'] = 'Widget: Corrélations';
$string['n7'] = 'Widget: Utilisation événement';
$string['n8'] = 'Page des cours';
$string['n9'] = 'Page des rapports';
$string['no_competency'] = 'il semble que vous ayez pas activé les compétences sur votre site Moodle.';
$string['no_data'] = 'Pas de données';
$string['number_of_sessions'] = 'Nombre de sessions';
$string['number_this_week'] = '{$a} cette semaine';
$string['number_today'] = '{$a} aujourdhui';
$string['ok'] = 'approuvé';
$string['overall_course_average'] = 'Moyenne générale des cours (tous les apprenants, tous les cours)';
$string['participation'] = 'Participation';
$string['passed'] = 'Passé';
$string['passed_on'] = 'Terminé (réussite) sur {$a}';
$string['please_wait_or_cancel'] = 'Veuillez patienter pour continuer ou <a href="{$a}"> Annuler </a>';
$string['pluginname'] = 'IntelliBoard.net Plugin';
$string['powered_by'] = 'Fait par <a href="https://intelliboard.net/"> IntelliBoard.net </a>';
$string['progress'] = 'progrès';
$string['quiz_name'] = 'Nom du quiz';
$string['quizzes'] = 'Questionnaires';
$string['registered'] = 'Inscrit';
$string['registrations'] = 'Inscriptions';
$string['report'] = 'rapport';
$string['reports'] = 'rapports';
$string['return_to_courses'] = 'Retour aux cours';
$string['return_to_grades'] = 'Retour aux notes/niveaux';
$string['return_to_home'] = 'Retourner à acceuil';
$string['role1'] = 'Premier rôle';
$string['role2'] = 'Deuxième rôle';
$string['s25'] = 'Temps consacré dans activité';
$string['s45'] = 'Activité';
$string['s46'] = 'Pourcentage des étudiants qui ont essayé';
$string['s47'] = 'Sujet';
$string['s48'] = 'Temps passé sur le sujet';
$string['save'] = 'sauvegarder';
$string['scale_percentage'] = 'Pourcentage';
$string['scale_raw'] = 'Désactiver échelle';
$string['scale_real'] = 'Afficher la note réelle au lieu de pourcentage';
$string['scales'] = 'Activer échelle personnalisée';
$string['scalesettings'] = 'Paramètres échelle';
$string['scale_total'] = 'note totale';
$string['scale_value'] = 'Valeur';
$string['score'] = 'Score';
$string['section'] = 'Section';
$string['sections'] = 'Sections';
$string['select'] = 'Sélectionner';
$string['selectall'] = 'Tout sélectionner';
$string['select_date'] = 'Sélectionner une date';
$string['server'] = 'Serveur IntelliBoard';
$string['server_au'] = 'IntelliBoard Australie';
$string['server_eu'] = 'IntelliBoard Europe';
$string['server_usa'] = 'IntelliBoard USA';
$string['settings'] = 'Paramètres';
$string['showing_1_to_10'] = 'Afficher 1 à 10';
$string['sso'] = 'SSO link';
$string['sso_desc'] = 'SSO Link to IntelliBoard.net';
$string['status'] = 'Statut';
$string['support'] = 'Soutien';
$string['t01'] = 'Filtre temporel: le mois dernier';
$string['t02'] = 'Filtre temporel: dernier trimestre';
$string['t03'] = 'Filtre temporel: Dernier semestre';
$string['t04'] = 'Activer [en-tête] Cours terminés';
$string['t05'] = 'Activer [en-tête] Cours en progression';
$string['t06'] = 'Activer [en-tête] Cours niveau moyen';
$string['t07'] = 'Activer [en-tête] Messages';
$string['t08'] = 'Activer [en-tête] Cours niveau montant';
$string['t09'] = 'l\'instructeur peut voir ses propres étudiants';
$string['t1'] = 'Activer le tableau de bord Apprenants';
$string['t10'] = 'Activer le widget [Questionnaires]';
$string['t11'] = 'Activer le widget [Progression du cours]';
$string['t12'] = 'Activer le widget [Participation à une activité]';
$string['t13'] = 'Activer le widget [Apprentissage]';
$string['t14'] = 'Activer le widget [Réussite du cours]';
$string['t15'] = 'Activer le widget [Corrélations]';
$string['t16'] = 'Activer le cours enseignant';
$string['t17'] = 'Activer la catégorie de cours';
$string['t18'] = 'Activer achèvement du cours';
$string['t19'] = 'Activer le niveau';
$string['t2'] = 'Activer le tableau de bord';
$string['t20'] = 'Activer la note moyenne du cours';
$string['t21'] = 'Activer le temps de cours passé';
$string['t22'] = 'Activer la date de début du cours';
$string['t23'] = 'Activer la colonne [Date de début du cours]';
$string['t24'] = 'Activer la colonne [Date inscription]';
$string['t25'] = 'Activer la colonne [Progression]';
$string['t26'] = 'Activer la colonne [Lettre]';
$string['t27'] = 'Activer la colonne [Activités terminées]';
$string['t28'] = 'Activer la colonne [Score]';
$string['t29'] = 'Activer la colonne [État  achèvement du cours]';
$string['t3'] = 'Activer les cours';
$string['t30'] = 'Activer la colonne [Catégories activité]';
$string['t31'] = 'Activer la colonne du widget [Affectations] [Niveau]';
$string['t32'] = 'Activer la colonne du widget [Affectations] [Date échéance]';
$string['t33'] = 'Activer la colonne du widget [Question] [Niveau]';
$string['t34'] = 'Activer la colonne du widget [Questionnaires] [Date échéance]';
$string['t35'] = 'Activer la colonne du widget [Progression du cours] [Progression]';
$string['t36'] = 'Activer la colonne du widget [Progression du cours] [Niveau]';
$string['t37'] = 'Activer la colonne du widget [Progression du cours] [Inscrit]';
$string['t38'] = 'Activer la colonne du widget [Progression du cours] [Terminé]';
$string['t52'] = 'Activer la rangée du widget [Progression du cours] [Catégorie]';
$string['t39'] = 'Activer option [Progression] [Niveau Objectif]';
$string['t4'] = 'Activer les notes';
$string['t40'] = 'Activer option [Progression] [Classe moyenne]';
$string['t41'] = 'Activer [En-tête des notes activité] Terminé le';
$string['t42'] = 'Activer [En-tête des catégories activités] Dernier accès au cours';
$string['t43'] = 'Activer la colonne Type activité [Niveaux activité]';
$string['t44'] = 'Activer la colonne Score [Catégories activité]';
$string['t45'] = 'Activer la colonne Noté [Niveaux activité]';
$string['t46'] = 'Activer la colonne complétée [Catégories activité]';
$string['t47'] = 'Cours [grille] couleur de fond';
$string['t48'] = 'Activer les rapports';
$string['t49'] = 'Signaler les colonnes de filtre';
$string['t5'] = 'Activer le graphique [Progression activité]';
$string['t50'] = 'Rôles du professeur';
$string['t51'] = 'Rôles étudiant';
$string['t6'] = 'Activer le graphique [Progression du cours]';
$string['t7'] = 'Activer [Moyenne de mes cours]';
$string['t8'] = 'Activer [Moyenne globale du cours]';
$string['t9'] = 'Activer le widget [Affectations]';
$string['te1'] = 'Email';
$string['te12'] = 'Prénom';
$string['te13'] = 'Nom de famille';
$string['te1_desc'] = 'Entrez le courriel utilisé avec votre abonnement IntelliBoard.net. Si vous navez pas dabonnement actif, inscrivez-vous sur <a target="_blank" href="https://intelliboard.net"> IntelliBoard.net </a>. Le tableau de bord apprenant et instructeur est disponible avec un abonnement de niveau 4 et plus.';
$string['teacher'] = 'Prof';
$string['tex1'] = 'Tableau de bord Apprenant IntelliBoard est pas activé.';
$string['time'] = 'Temps';
$string['time_period_due'] = 'Période (date échéance)';
$string['time_spent'] = 'Temps passé';
$string['tls12'] = 'TLS v1.2';
$string['tls12_desc'] = 'Paramètres avancés: TLS v1.2';
$string['topics'] = 'Sujets';
$string['total'] = 'Total';
$string['total_activities_resources'] = 'Total des activités / ressources';
$string['total_numbers'] = 'Date: {$ a-> timepoint}, Sessions: {$ a-> sessions}, Visites: {$ a-> visites}, Temps passé: {$a-> timespend}';
$string['total_numbers2'] = 'UTILISATEUR: {$a-> ID utilisateur}, Page: {$a-> page}, Param: {$pa-> param}, Visites: {$a-> visites}, Temps passé: {$a-> délai attente }';
$string['total_time_spent_enrolled_learners'] = 'Temps total passé par les apprenants inscrits sur le parcours';
$string['total_values_include'] = 'Les valeurs totales incluent des sessions uniques, des cours, des visites, le temps passé.';
$string['total_visits_enrolled_learners'] = 'Total des visites des apprenants inscrits sur le parcours';
$string['totara'] = 'Totara';
$string['trackadmin'] = 'Suivi des administrateurs';
$string['trackadmin_desc'] = 'Activer le suivi pour les utilisateurs admin (non recommandé)';
$string['tracking'] = 'Suivi de session';
$string['tracking_title'] = 'Suivi du temps';
$string['ts1'] = 'Tableau de bord apprenant';
$string['ts2'] = 'Page du tableau de bord apprenant';
$string['ts3'] = 'Cours de tableau de bord pour apprenants';
$string['ts4'] = 'Notes de tableau de bord apprenant';
$string['ts5'] = 'Rapports du tableau de bord des apprenants';
$string['type'] = 'Type';
$string['type_here'] = 'Entrez ici...';
$string['user_enrolments'] = 'Inscriptions des utilisateurs';
$string['user_grade_avg'] = '{$a-> utilisateur} note: {$a-> note}, note moyenne: {$a-> avg_grade_site})';
$string['users'] = 'Utilisateurs';
$string['users_activity'] = 'Activité des utilisateurs';
$string['users_overview'] = 'Aperçu des utilisateurs';
$string['user_visit_avg'] = 'Visites {$a-> utilisateur}: {$a-> visites}, Visites moyennes: {$a-> avg_visits_site}';
$string['user_time_avg'] = '{$a-> user} time: {$a-> timespend}, Temps moyen: {$a-> avg_timespend_site}';
$string['view_course_details'] = 'Voir les détails du cours';
$string['visits'] = 'Visites';
$string['weekly'] = 'Hebdomadaire';
$string['widget_name27'] = 'Les inscriptions cumulées';
$string['widget_name28'] = 'Engagement';
$string['widget_name29'] = 'Authentifications unique';
$string['widget_name30'] = 'Inscriptions par cours';
$string['x_completions'] = '{$a} achevement';
$string['you_have_certificates'] = 'Vous avez des certificats {$a}';
$string['widget_name31'] = 'Registraires et superviseur';
$string['total_numbers3'] = '---- Date: {$a-> timecreated}, Track ID: {$a-> trackid}, Visites: {$a-> visites}, Temps passé: {$a-> timespend}';

$string['reportselect'] = 'Please select at least one report from App.IntelliBoard.net.  Click on a Report, then Report Settings, and select it in "Visible in Moodle".';
$string['monitorselect'] = 'Please select at least one monitor from App.IntelliBoard.net.  Click on a Monitors, then Monitors Settings, and select it in "Visible in Moodle".';


$string['privacy:metadata:local_intelliboard_assign:rel'] = 'Rel type of record';
$string['privacy:metadata:local_intelliboard_assign:type'] = 'Moodle Instance Type';
$string['privacy:metadata:local_intelliboard_assign:instance'] = 'Connected Moodle Instance ID';
$string['privacy:metadata:local_intelliboard_assign:timecreated'] = 'Records Timestamp';

$string['privacy:metadata:local_intelliboard_details:logid'] = 'Table ID [local_intelliboard_logs]';
$string['privacy:metadata:local_intelliboard_details:visits'] = 'The number of visits, mouse clicks, per day';
$string['privacy:metadata:local_intelliboard_details:timespend'] = 'The amount of time spent per hour';
$string['privacy:metadata:local_intelliboard_details:timepoint'] = 'The hour';

$string['privacy:metadata:local_intelliboard_logs:trackid'] = 'The ID of the table [local_intelliboard_tracking]';
$string['privacy:metadata:local_intelliboard_logs:visits'] = 'Visits, mouse clicks, per day';
$string['privacy:metadata:local_intelliboard_logs:timespend'] = 'Timespent, per day';
$string['privacy:metadata:local_intelliboard_logs:timepoint'] = 'Timestamp of day in year';

$string['privacy:metadata:local_intelliboard_totals:sessions'] = 'Total Number of User Sessions in Moodle';
$string['privacy:metadata:local_intelliboard_totals:courses'] = 'Total Courses in Moodle';
$string['privacy:metadata:local_intelliboard_totals:visits'] = 'Total Visits by all Ssers in Moodle';
$string['privacy:metadata:local_intelliboard_totals:timespend'] = 'Total Users Timespent in Moodle';
$string['privacy:metadata:local_intelliboard_totals:timepoint'] = 'Timestamp of day in year';

$string['privacy:metadata:local_intelliboard_tracking:userid'] = 'User ID who visits Moodle Page.';
$string['privacy:metadata:local_intelliboard_tracking:courseid'] = 'Course ID that User Visits';
$string['privacy:metadata:local_intelliboard_tracking:page'] = 'Page Type [course,module,profile,site]';
$string['privacy:metadata:local_intelliboard_tracking:param'] = 'Page ID Type';
$string['privacy:metadata:local_intelliboard_tracking:visits'] = 'Users Visits on a Page';
$string['privacy:metadata:local_intelliboard_tracking:timespend'] = 'Users Timespent on a Page';
$string['privacy:metadata:local_intelliboard_tracking:firstaccess'] = 'Users First Access';
$string['privacy:metadata:local_intelliboard_tracking:lastaccess'] = 'Users Last Access';
$string['privacy:metadata:local_intelliboard_tracking:useragent'] = 'Users Browser Type';
$string['privacy:metadata:local_intelliboard_tracking:useros'] = 'Users Operating System';
$string['privacy:metadata:local_intelliboard_tracking:userlang'] = 'Users Browser Language';
$string['privacy:metadata:local_intelliboard_tracking:userip'] = 'Users Last IP address';

$string['privacy:metadata:local_intelliboard_ntf:id'] = 'Notification ID';
$string['privacy:metadata:local_intelliboard_ntf:type'] = 'Notification type';
$string['privacy:metadata:local_intelliboard_ntf:externalid'] = 'Notification ExternalNID';
$string['privacy:metadata:local_intelliboard_ntf:userid'] = 'Notification ExternalAppID';
$string['privacy:metadata:local_intelliboard_ntf:email'] = 'Notification email';
$string['privacy:metadata:local_intelliboard_ntf:cc'] = 'Notification cc';
$string['privacy:metadata:local_intelliboard_ntf:subject'] = 'Notification subject';
$string['privacy:metadata:local_intelliboard_ntf:message'] = 'Notification message';
$string['privacy:metadata:local_intelliboard_ntf:state'] = 'Notification status';
$string['privacy:metadata:local_intelliboard_ntf:attachment'] = 'Notification attachment';
$string['privacy:metadata:local_intelliboard_ntf:tags'] = 'Notification tags';

$string['privacy:metadata:local_intelliboard_ntf_hst:id'] = 'Notification history ID';
$string['privacy:metadata:local_intelliboard_ntf_hst:notificationid'] = 'Notification ID';
$string['privacy:metadata:local_intelliboard_ntf_hst:userid'] = 'Notification ExternalAppID';
$string['privacy:metadata:local_intelliboard_ntf_hst:notificationname'] = 'Notification name';
$string['privacy:metadata:local_intelliboard_ntf_hst:email'] = 'Notification history email';
$string['privacy:metadata:local_intelliboard_ntf_hst:timesent'] = 'Notification history timestamp';

$string['select_manager_role'] = 'Sélectionnez le rôle de responsable';
$string['group_aggregation'] = 'Agrégation de groupe';
$string['ssodomain'] = 'Subdomain SSO';
$string['ssodomain_desc'] = 'Single Sign On with separated Server/Account';
$string['instructor_redirect'] = "Redirection de l'instructeur";
$string['student_redirect'] = 'Redirection des étudiants';
$string['scale_percentage_round'] = 'Porcentaje redondo';



$string['api'] = 'Alternative API';
$string['api_desc'] = 'Use alternative API server (to avoid firewall blocking)';
$string['n18'] = 'Widget: Student Grade Progression';
$string['n101'] = 'Enable Instructor Dashboard';
$string['loading2'] = 'Please wait, loading...';
$string['in34'] = 'Student Grade Progression';
$string['select_course'] = 'Select course';
$string['select_quiz'] = 'Select quiz';
$string['not_quiz'] = 'Oops, it looks like you do not have any quizzes created for selected course.';
$string['enter_course_and_quiz'] = 'Please select your course and quiz.';
$string['enter_quiz'] = 'Please select your quiz.';
$string['analityc_3_name'] = 'Quiz Overview & Question Detail';
$string['course_name_a'] = 'Course: {$a}';
$string['quiz_name_a'] = 'Quiz: {$a}';
$string['cor_incor_answers'] = 'Correct/Incorrect Answers';
$string['quiz_finished'] = 'Quiz finished';
$string['quiz_grades'] = 'Quiz grades';
$string['correct_number'] = 'Correct {$a}';
$string['incorrect_number'] = 'Incorrect {$a}';
$string['correct'] = 'Correct';
$string['incorrect'] = 'Incorrect';
$string['weekday_0'] = 'Monday';
$string['weekday_1'] = 'Tuesday';
$string['weekday_2'] = 'Wednesday';
$string['weekday_3'] = 'Thursday';
$string['weekday_4'] = 'Friday';
$string['weekday_5'] = 'Saturday';
$string['weekday_6'] = 'Sunday';
$string['time_1'] = 'Morning';
$string['time_2'] = 'Afternoon';
$string['time_3'] = 'Evening';
$string['time_4'] = 'Off Hours';
$string['passing_score_for'] = 'Passing grade for {$a}';
$string['name'] = 'Name';
$string['answers'] = 'Answers';
$string['ques_breakdown'] = 'Question Breakdown';
$string['n17'] = 'Analytics Page';
$string['analytics'] = 'Analytics';
$string['pdf'] = 'PDF';
$string['csv'] = 'CSV';
$string['excel'] = 'Excel';
$string['grades_alt_text'] = 'Alternative text for navigation menu';
$string['course_chart'] = 'Enable course chart';
$string['course_activities'] = 'Enable course activities';
$string['filter_this_year'] = 'Time filter: This Year';
$string['filter_last_year'] = 'Time filter: Last Year';
$string['this_year'] = 'This Year';
$string['last_year'] = 'Last Year';
$string['select_user'] = 'Select user';
$string['course_max_grade'] = 'Course max grade';
$string['no_data_notification'] = 'There is no new data for [date]';
$string['last_hour'] = 'hour';
$string['last_day'] = 'day';
$string['privacy:metadata:local_intelliboard_assign'] = 'Intelliboard assigns-subaccounts table';
$string['privacy:metadata:local_intelliboard_details'] = 'Intelliboard alt/logs/by-hour table';
$string['privacy:metadata:local_intelliboard_logs'] = 'Intelliboard alt/logs/by-day table';
$string['privacy:metadata:local_intelliboard_totals'] = 'Intelliboard alt/logs/total table';
$string['privacy:metadata:local_intelliboard_tracking'] = 'Intelliboard alt/logs/all-time table';
$string['privacy:metadata:local_intelliboard_reports'] = 'Intelliboard custom sql reports table';
$string['privacy:metadata:local_intelliboard_ntf'] = 'Intelliboard notifications main table';
$string['privacy:metadata:local_intelliboard_ntf_hst'] = 'Intelliboard notifications history table';
$string['privacy:metadata:local_intelliboard_ntf_pms'] = 'Intelliboard notifications dynamic params table';
$string['privacy:metadata:local_intelliboard_assign:userid'] = 'USER ID of record';
$string['privacy:metadata:local_intelliboard_reports:status'] = 'Status of report - activated/not activated';
$string['privacy:metadata:local_intelliboard_reports:name'] = 'Name of custom report';
$string['privacy:metadata:local_intelliboard_reports:sqlcode'] = 'BASE64 encoded SQL code';
$string['privacy:metadata:local_intelliboard_reports:timecreated'] = 'Creation time';
$string['sqlreport'] = 'SQL report';
$string['sqlreportcreate'] = 'Create report';
$string['sqlreports'] = 'SQL reports';
$string['sqlreportname'] = 'Report name';
$string['sqlreportcode'] = 'SQL';
$string['sqlreportdate'] = 'Created On';
$string['sqlreportactive'] = 'Activated';
$string['sqlreportinactive'] = 'Deactivated';
$string['remove_message'] = 'SQL report has been deleted';
$string['delete_message'] = 'Delete SQL report?';
$string['success_message'] = 'SQL report has been saved';
$string['bbbapiendpoint'] = 'BBB API endpoint';
$string['bbbserversecret'] = 'BBB server secret';
$string['check_active_meetings'] = 'Check active meetings';
$string['bbbmeetings'] = 'BigBlueButton meetings';
$string['enablebbbmeetings'] = 'Enable monitoring of BigBlueButton meetings';
$string['privacy:metadata:local_intelliboard_bbb_meet'] = 'Log about BigBlueButton meetings';
$string['privacy:metadata:local_intelliboard_bbb_meet:id'] = 'ID of meeting log';
$string['privacy:metadata:local_intelliboard_bbb_meet:meetingname'] = 'Meeting name';
$string['privacy:metadata:local_intelliboard_bbb_meet:meetingid'] = 'Meeting ID';
$string['privacy:metadata:local_intelliboard_bbb_meet:internalmeetingid'] = 'Internal (in BBB server) Meeting ID';
$string['privacy:metadata:local_intelliboard_bbb_meet:createtime'] = 'Create time (timestamp)';
$string['privacy:metadata:local_intelliboard_bbb_meet:createdate'] = 'Create date (string)';
$string['privacy:metadata:local_intelliboard_bbb_meet:voicebridge'] = 'The extension number for the voice bridge (use if connected to phone system)';
$string['privacy:metadata:local_intelliboard_bbb_meet:dialnumber'] = 'The dial access number that participants can call in using regular phone.';
$string['privacy:metadata:local_intelliboard_bbb_meet:attendeepw'] = 'The password that will be required for attendees to join the meeting';
$string['privacy:metadata:local_intelliboard_bbb_meet:moderatorpw'] = 'The password that will be required for moderators to join the meeting or for certain administrative actions';
$string['privacy:metadata:local_intelliboard_bbb_meet:running'] = 'Status of meeting (active|stopped)';
$string['privacy:metadata:local_intelliboard_bbb_meet:duration'] = 'Meeting duration';
$string['privacy:metadata:local_intelliboard_bbb_meet:hasuserjoined'] = 'Flag. Users joined to meeting';
$string['privacy:metadata:local_intelliboard_bbb_meet:recording'] = 'Flag. Meeting will be recorded';
$string['privacy:metadata:local_intelliboard_bbb_meet:hasbeenforciblyended'] = 'Flag. Meeting has been forcibly ended';
$string['privacy:metadata:local_intelliboard_bbb_meet:starttime'] = 'Start time of meeting';
$string['privacy:metadata:local_intelliboard_bbb_meet:endtime'] = 'End time of meeting';
$string['privacy:metadata:local_intelliboard_bbb_meet:participantcount'] = 'Number of attendees';
$string['privacy:metadata:local_intelliboard_bbb_meet:listenercount'] = 'Number of listeners';
$string['privacy:metadata:local_intelliboard_bbb_meet:voiceparticipantcount'] = 'Number of participants with connected microphone';
$string['privacy:metadata:local_intelliboard_bbb_meet:videocount'] = 'Number of participants with connected video camera';
$string['privacy:metadata:local_intelliboard_bbb_meet:maxusers'] = 'Max number of participants';
$string['privacy:metadata:local_intelliboard_bbb_meet:moderatorcount'] = 'Number of moderators';
$string['privacy:metadata:local_intelliboard_bbb_meet:courseid'] = 'Course ID';
$string['privacy:metadata:local_intelliboard_bbb_meet:cmid'] = 'Course module ID';
$string['privacy:metadata:local_intelliboard_bbb_meet:bigbluebuttonbnid'] = 'Row ID in table bigbluebuttonbn';
$string['privacy:metadata:local_intelliboard_bbb_meet:ownerid'] = 'Owner ID (user which created the meeting)';
$string['privacy:metadata:local_intelliboard_bbb_atten'] = 'Log about attendees of BigBlueButton meetings';
$string['privacy:metadata:local_intelliboard_bbb_atten:id'] = 'Attendee ID';
$string['privacy:metadata:local_intelliboard_bbb_atten:userid'] = 'User ID (row in table "user")';
$string['privacy:metadata:local_intelliboard_bbb_atten:fullname'] = 'Full name of meeting attendee';
$string['privacy:metadata:local_intelliboard_bbb_atten:role'] = 'Role of meeting attendee';
$string['privacy:metadata:local_intelliboard_bbb_atten:ispresenter'] = 'Flag. Attendee is presenter';
$string['privacy:metadata:local_intelliboard_bbb_atten:islisteningonly'] = 'Flag. Attendee has no connected microphone or webcam';
$string['privacy:metadata:local_intelliboard_bbb_atten:hasjoinedvoice'] = 'Flag. Attendee has connected microphone';
$string['privacy:metadata:local_intelliboard_bbb_atten:hasvideo'] = 'Flag. Attendee has connected webcam';
$string['privacy:metadata:local_intelliboard_bbb_atten:meetingid'] = 'Meeting ID (ID in BigBlueButton server)';
$string['privacy:metadata:local_intelliboard_bbb_atten:localmeetingid'] = 'Meeting ID (ID in table local_intelliboard_bbb_meet)';
$string['privacy:metadata:local_intelliboard_bbb_atten:arrivaltime'] = 'Time when user connected to meeting';
$string['privacy:metadata:local_intelliboard_bbb_atten:departuretime'] = 'Time when user disconnected from meeting';

$string['myorders'] = 'Orders';
$string['myseats'] = 'Seats';
$string['mywaitlist'] = 'Waitlist';
$string['mysubscriptions'] = 'Subscriptions';
$string['seatscode'] = 'Seats code';
$string['numberofseats'] = 'Number of seats';
$string['downloadinvoice'] = 'Download Invoice';
$string['product'] = 'Product';
$string['key'] = 'Key';
$string['created'] = 'Created';
$string['seatnumber'] = 'Seats Number';
$string['seatsused'] = 'Seat Used';
$string['details'] = 'Details';
$string['username'] = 'User Name';
$string['used'] = 'Used';
$string['subscriptiondate'] = 'Subscription date';
$string['price'] = 'Price';
$string['recurringperiod'] = 'Recurring period';
$string['billingcycles'] = 'Billing cycles';
$string['active'] = 'Active';
$string['suspended'] = 'Suspended';
$string['canceled'] = 'Canceled';
$string['expired'] = 'Expired';
$string['process'] = 'Process';
$string['cancel_subscription'] = 'Cancel subscription';
$string['messageprovider:intelliboard_notification'] = "Intelliboard notification";

 $string['debug'] = "Debug CURL requests";
 $string['debug_desc'] = "";

 $string['intellicart'] = "IntelliCart integration";
 $string['intellicart_desc'] = "Allow students to see IntelliCart reports.";
