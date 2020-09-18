{"version":3,"sources":["script.js"],"names":["BX","namespace","Component","node","config","this","prototype","getNodes","role","scope","el","querySelectorAll","getNode","createNodeFromTemplate","name","tpls","tpl","querySelector","newTpl","clone","removeAttribute","init","initEventsApplyButton","initStartButton","renderWorkflows","workflows","list","cleanNode","hasEvents","i","length","appendChild","renderWorkflow","eventsApplyContainer","workflow","setAttribute","addClass","getAttribute","canTerminate","terminateContainer","remove","canKill","killContainer","tasksList","task","taskLink","create","props","href","text","util","htmlspecialcharsback","bind","onTaskLinkClick","children","eventsSelect","value","templateName","textContent","modified","stateName","initWorkflowNode","button","onApplyEventsClick","Starter","Bizproc","moduleId","entity","documentType","documentId","addCustomEvent","reloadWorkflows","onStartClick","workflowId","killButton","onKillWorkflowClick","terminateButton","onTerminateWorkflowClick","logButton","onLogClick","workflowNode","e","preventDefault","me","callAction","workflow_id","data","form","eventsNodes","events","starter","showTemplatesMenu","showTaskPopup","top","Bitrix24","Slider","open","message","showWorkflowLogPopup","title","actionName","params","callback","showWait","bitrix_sessid","ajax","method","dataType","url","serviceUrl","onsuccess","responce","success","window","alert","errors","join","hideWait","onfailure","removeClass","DocumentComponent"],"mappings":"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","file":"script.map.js"}